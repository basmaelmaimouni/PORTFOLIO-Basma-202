// Usage (men dossier principal dyal l projet):  node generate-manifest.js
// Kayskanni public/docs w kaykteb api/manifest.php (li kayqrah index.php 3la Vercel)
const fs = require('fs');
const path = require('path');

const ROOT = __dirname;
const DOCS = path.join(ROOT, 'public', 'docs');
const PROJECTS = ['docs/projets/acheto', 'docs/projets/projet-fin-formation']; // nfs l tartib dyal index.php
const MODULE_IDS = ['M201', 'M202', 'M203', 'M204', 'M205', 'M206'];

const nat = (a, b) => a.localeCompare(b, undefined, { numeric: true, sensitivity: 'base' });
const enc = s => encodeURIComponent(s).replace(/[!'()*]/g, c => '%' + c.charCodeAt(0).toString(16).toUpperCase());
const isDir = p => { try { return fs.statSync(p).isDirectory(); } catch { return false; } };

function walk(dir, deep, base = '') {
  let out = [];
  if (!isDir(dir)) return out;
  for (const e of fs.readdirSync(dir, { withFileTypes: true })) {
    const rel = base ? base + '/' + e.name : e.name;
    if (e.isDirectory()) { if (deep) out = out.concat(walk(path.join(dir, e.name), deep, rel)); }
    else if (e.isFile() && e.name.toLowerCase().endsWith('.pdf')) out.push(rel);
  }
  return out;
}

function scanPdfs(dir, rel, deep = true) {
  return walk(dir, deep).map(sub => {
    const low = sub.toLowerCase();
    const type = low.includes('atelier') ? 'ateliers' : low.includes('projet') ? 'projets' : 'td';
    let name = path.basename(sub, path.extname(sub)).replace(/[_\-]+/g, ' ').trim();
    name = name.charAt(0).toUpperCase() + name.slice(1);
    return { name, url: (rel + '/' + sub).split('/').map(enc).join('/'), type };
  }).sort((a, b) => nat(a.name, b.name));
}

function groupTypes(files) {
  const t = {};
  for (const k of ['td', 'ateliers', 'projets']) {
    const l = files.filter(f => f.type === k).map(f => ({ name: f.name, url: f.url }));
    if (l.length) t[k] = l;
  }
  return t;
}

const data = {};
for (const id of MODULE_IDS) {
  const mod = 'm-' + id.slice(1), dir = path.join(DOCS, mod), rel = 'docs/' + mod;
  data[id] = [];
  const dirs = isDir(dir) ? fs.readdirSync(dir, { withFileTypes: true }).filter(e => e.isDirectory()).map(e => e.name).sort(nat) : [];
  for (const n of dirs) data[id].push({ label: n, types: groupTypes(scanPdfs(path.join(dir, n), rel + '/' + n)) });
  const loose = groupTypes(scanPdfs(dir, rel, false));
  if (Object.keys(loose).length) data[id].push({ label: '', types: loose });
  if (!data[id].length) data[id].push({ label: '', types: {} });
}
const pfiles = {};
PROJECTS.forEach((p, i) => { pfiles['P' + i] = scanPdfs(path.join(ROOT, 'public', p), p).map(f => ({ name: f.name, url: f.url })); });

function php(v) {
  if (Array.isArray(v)) return '[' + v.map(php).join(',') + ']';
  if (v && typeof v === 'object') { const k = Object.keys(v); return k.length ? '[' + k.map(x => php(x) + '=>' + php(v[x])).join(',') + ']' : '[]'; }
  return "'" + String(v).replace(/\\/g, '\\\\').replace(/'/g, "\\'") + "'";
}

fs.mkdirSync(path.join(ROOT, 'api'), { recursive: true });
fs.writeFileSync(path.join(ROOT, 'api', 'manifest.php'), '<?php\nreturn [' + php(data) + ',' + php(pfiles) + '];\n');
const n = Object.values(data).flat().reduce((s, p) => s + Object.values(p.types).reduce((a, l) => a + l.length, 0), 0);
console.log('OK: api/manifest.php cree (' + n + " PDF dans les modules). Daba: git add . / git commit -m \"manifest\" / git push");