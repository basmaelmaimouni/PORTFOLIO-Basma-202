<?php
/* ================== CONFIG (بدّل غير هنا) ================== */
// المسارات: على Vercel كيتخدم public/ من الجذر (/docs/...)، وفاللوكال (XAMPP) كيتخدم ../public
$onVercel = getenv('VERCEL') || getenv('VERCEL_ENV') || !is_dir(__DIR__.'/../public');
$fs  = realpath(__DIR__.'/../public') ?: (__DIR__.'/public');
$url = $onVercel ? '' : (is_dir(__DIR__.'/../public') ? '../public' : 'public');
$me = [
  'name'    => 'Basma Elmaimouni',                       // سميتك
  'role'    => 'Développeuse Full Stack',
  'typing'  => ['Développeuse Full Stack', 'Passionné par le Web', 'Créatif & Curieux'],
  'about'   => "Étudiante en 2ème année Développement Digital option Full Stack. J'aime transformer des idées en applications web modernes, propres et performantes. Ce portfolio regroupe mes ateliers, TDs et projets réalisés durant l'année.",
  'email'   => 'basmaelmaimouni6@gmail.com',
  'github'  => 'https://github.com/karim',
  'linkedin'=> 'https://linkedin.com/in/karim',
  'photo'   => $url.'/images/'.rawurlencode('Basma.jpeg'),          // تصويرتك لفوق (Hero)
  'about_photo' => $url.'/images/'.rawurlencode('about basma.jpeg'),        // تصويرة About me
];
// سميات المودولات (بدّلها بالسميات الحقيقية)
$modules = [
  'M201' => ['Préparation d\'un projet web', '📋'],
  'M202' => ['Approche Agile', '🔄'],
  'M203' => ['Gestion des données', '🗄️'],
  'M204' => ['Développement front-end', '🎨'],
  'M205' => ['Développement back-end', '⚙️'],
  'M206' => ['Création d\'une application cloud native', '☁️'],
];
// المشروعين
$projects = [
  ['Acheto', 'Projet Acheto : présentation, objectifs et fonctionnalités principales.', ['PHP','MySQL','JS'], 'https://github.com/karim/projet1', 'docs/projets/acheto'],
  ['Projet fin formation', 'Projet de fin de formation Full Stack : conception et réalisation complète de l’application.', ['HTML','CSS','JS'], 'https://github.com/karim/projet2', 'docs/projets/projet-fin-formation'],
];
/* ===================== كتب هنا الملفات ديالك ديريكت =====================
   كل ملف: ['السمية اللي كتبان فالموقع', 'الطريق']
   الطريق كيبدا من docs/  (بلا public/)  وكيفما كاين بالضبط فالـ dossier:
     public/docs/m-201/Figma/Atelier Figma-1.pdf   ==>   'docs/m-201/Figma/Atelier Figma-1.pdf'
   ⚠ على Vercel الحروف الكبيرة والصغيرة مهمين: Figma ≠ figma  /  m-201 ≠ M-201
   الأنواع: 'td' | 'ateliers' | 'projets'
   ================================================================== */
$files = [
  'M201' => [
    'Figma' => [
      'ateliers' => [
        ['Atelier Figma 1', 'docs/m-201/Figma/Atelier Figma-1.pdf'],
        ['Atelier Figma 2', 'docs/m-201/Figma/Atelier Figma-2.pdf'],
        ['Atelier 3 Figma', 'docs/m-201/Figma/Atelier-3 Figma.pdf'],
      ],
    ],
    'UML' => [
      'td' => [
        // بدّل ... بالسمية الكاملة ديال الملف وحيّد //
        // ['Ex App diagramme 1',  'docs/m-201/UML/ex_App_diagramme_....pdf'],
        // ['Ex App diagramme 2',  'docs/m-201/UML/ex_App_diagramme_....pdf'],
        // ['TD Diagramme',        'docs/m-201/UML/TD_Diagramme_de_s....pdf'],
        // ['TD1 Diagramme',       'docs/m-201/UML/TD1_diagramme_de_....pdf'],
        // ['TD2 Diagramme',       'docs/m-201/UML/TD2_diagramme_use....pdf'],
      ],
      'ateliers' => [
        ['Atelier 1', 'docs/m-201/UML/Atelier 1.pdf'],
      ],
    ],
  ],
  'M202' => [
    'WaterFall' => [
      'ateliers' => [
        // ['Exercices', 'docs/m-202/WaterFall/Atelier..../EXERCICES.pdf'],
      ],
    ],
  ],
  'M203' => [],
  'M204' => [],
  'M205' => [],
  'M206' => [],
];
// ملفات المشروعين: 0 = Acheto ، 1 = Projet fin formation
$projectFiles = [
  0 => [
    // ['Rapport Acheto', 'docs/projets/acheto/rapport.pdf'],
  ],
  1 => [
    // ['Rapport projet fin formation', 'docs/projets/projet-fin-formation/rapport.pdf'],
  ],
];
/* ================== من هنا لتحت ما تقيسش والو ================== */
function mkUrl($path){ global $url; return $url.'/'.implode('/', array_map('rawurlencode', explode('/', $path))); }
function mkList($l){ return array_map(fn($f) => ['name' => $f[0], 'url' => mkUrl($f[1])], $l); }
function cnt($d, $t){ $n = 0; foreach ($d as $p) $n += count($p['types'][$t] ?? []); return $n; }
function tagsOf($d){ $l = array_filter(array_column($d, 'label')); return $l ?: ['TD', 'Ateliers', 'Projets']; }
$data = [];
foreach ($modules as $id => $m) {
  $data[$id] = [];
  foreach (($files[$id] ?? []) as $label => $types) {
    $t = [];
    foreach (['td', 'ateliers', 'projets'] as $k) if (!empty($types[$k])) $t[$k] = mkList($types[$k]);
    $data[$id][] = ['label' => $label, 'types' => $t];
  }
  if (!$data[$id]) $data[$id][] = ['label' => '', 'types' => []];
}
$pfiles = [];
foreach ($projects as $i => $p) $pfiles["P$i"] = mkList($projectFiles[$i] ?? []);
$h = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Portfolio — <?= $h($me['name']) ?></title>
<style>
:root{--bg:#fff6f1;--card:rgba(255,255,255,.68);--bd:rgba(180,110,120,.22);--tx:#3a2733;--mu:#7d6571;--a:#d9688a;--b:#f2a07a;--c:#a98bdc;--g:linear-gradient(135deg,var(--a),var(--b) 55%,var(--c))}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;background:var(--bg);color:var(--tx);overflow-x:hidden;line-height:1.6}
.blob{position:fixed;border-radius:50%;filter:blur(90px);opacity:.5;z-index:-1;animation:float 18s ease-in-out infinite}
.b1{width:420px;height:420px;background:var(--a);top:-100px;left:-100px}
.b2{width:380px;height:380px;background:var(--b);bottom:-80px;right:-80px;animation-delay:-6s}
.b3{width:300px;height:300px;background:var(--c);top:45%;left:55%;animation-delay:-12s}
@keyframes float{50%{transform:translate(60px,-50px) scale(1.15)}}
nav{position:fixed;top:0;width:100%;display:flex;justify-content:space-between;align-items:center;padding:14px 6%;backdrop-filter:blur(14px);background:rgba(255,246,241,.78);border-bottom:1px solid var(--bd);z-index:50}
.logo{font-weight:800;font-size:1.3rem;background:var(--g);-webkit-background-clip:text;background-clip:text;color:transparent}
nav a{color:var(--mu);text-decoration:none;margin-left:22px;font-size:.95rem;transition:.3s}
nav a:hover{color:var(--a)}
section{padding:100px 6% 40px;max-width:1200px;margin:auto}
h2{font-size:2.1rem;margin-bottom:8px}
h2 span,.grad{background:var(--g);-webkit-background-clip:text;background-clip:text;color:transparent}
.sub{color:var(--mu);margin-bottom:34px}
#home{min-height:100vh;display:flex;align-items:center;gap:50px;flex-wrap:wrap-reverse;justify-content:center}
.hero-t{flex:1 1 360px}
.hero-t h1{font-size:clamp(2.4rem,6vw,4rem);line-height:1.1;margin:8px 0}
.hi{color:var(--a);font-weight:600;letter-spacing:2px}
.type{font-size:1.4rem;min-height:2em;color:var(--mu)}
.type b{color:var(--tx)}.cur{animation:blink 1s infinite;color:var(--a)}
@keyframes blink{50%{opacity:0}}
.btns{margin-top:26px;display:flex;gap:14px;flex-wrap:wrap}
.btn{padding:12px 26px;border-radius:50px;text-decoration:none;font-weight:600;border:1px solid var(--bd);color:var(--tx);transition:.3s;cursor:pointer;background:var(--card);font-size:1rem}
.btn.p{background:var(--g);border:0;color:#3a1f2b;box-shadow:0 10px 30px rgba(217,104,138,.35)}
.btn:hover{transform:translateY(-4px)}
.ph{position:relative;width:min(320px,70vw);aspect-ratio:1;flex:0 0 auto}
.ph::before{content:"";position:absolute;inset:-8px;border-radius:50%;background:conic-gradient(var(--a),var(--b),var(--c),var(--a));animation:spin 6s linear infinite}
.ph .in{position:absolute;inset:0;border-radius:50%;overflow:hidden;background:#f6dfe0;display:grid;place-items:center;font-size:5rem;font-weight:800;border:6px solid var(--bg)}
.ph img,.abp img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 18%}
@keyframes spin{to{transform:rotate(360deg)}}
.about{display:flex;gap:40px;align-items:center;flex-wrap:wrap}
.abp{position:relative;flex:0 0 340px;max-width:100%;height:430px;border-radius:24px;overflow:hidden;background:var(--g);display:grid;place-items:center;font-size:4rem;transform:rotate(-3deg);transition:.4s;box-shadow:0 20px 50px rgba(120,60,80,.28)}
.abp:hover{transform:rotate(0) scale(1.03)}
.abt{flex:1 1 320px;color:var(--mu);font-size:1.05rem}
.stats{display:flex;gap:16px;margin-top:22px;flex-wrap:wrap}
.stat{flex:1;min-width:100px;padding:16px;border-radius:16px;background:var(--card);border:1px solid var(--bd);text-align:center}
.stat b{font-size:2rem;display:block}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:22px}
.card{position:relative;padding:26px;border-radius:20px;background:var(--card);border:1px solid var(--bd);backdrop-filter:blur(10px);cursor:pointer;transition:transform .25s,border-color .3s;overflow:hidden}
.card::after{content:"";position:absolute;inset:0;background:radial-gradient(circle at var(--x,50%) var(--y,0),rgba(217,104,138,.2),transparent 60%);opacity:0;transition:.3s}
.card:hover{border-color:var(--a)}.card:hover::after{opacity:1}
.card>*{position:relative;z-index:1}
.ico{font-size:2.2rem}.mid{color:var(--a);font-weight:700;font-size:.85rem;letter-spacing:2px;margin-top:8px}
.card h3{margin:4px 0 12px}
.tags{display:flex;gap:6px;flex-wrap:wrap}
.tag{font-size:.75rem;padding:3px 10px;border-radius:20px;background:rgba(217,104,138,.14);color:#a8405f}
.cnt{margin-top:14px;font-size:.85rem;color:var(--mu)}
.rv{opacity:0;transform:translateY(40px);transition:1s cubic-bezier(.2,.8,.2,1)}.rv.on{opacity:1;transform:none}
.contact{text-align:center}
.soc{display:flex;gap:14px;justify-content:center;flex-wrap:wrap;margin-top:20px}
footer{text-align:center;color:var(--mu);padding:40px 0;font-size:.9rem}
.modal{position:fixed;inset:0;background:rgba(58,39,51,.55);backdrop-filter:blur(8px);display:none;place-items:center;z-index:100;padding:16px}
.modal.open{display:grid}
.box{width:min(1000px,100%);max-height:92vh;overflow:auto;background:#fffaf7;border:1px solid var(--bd);border-radius:24px;padding:26px;animation:pop .35s}
@keyframes pop{from{transform:scale(.9);opacity:0}}
.mh{display:flex;justify-content:space-between;align-items:start;gap:10px}
.x{background:var(--card);border:1px solid var(--bd);color:var(--tx);width:38px;height:38px;border-radius:50%;cursor:pointer;font-size:1.1rem;flex:0 0 auto}
.tabs{display:flex;gap:8px;margin:18px 0;flex-wrap:wrap}
.tab{padding:8px 18px;border-radius:30px;border:1px solid var(--bd);background:transparent;color:var(--mu);cursor:pointer;font-size:.95rem}
.tab.on{background:var(--g);color:#3a1f2b;border:0}
.parts,.tabs2{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:12px}.part{padding:10px 24px;border-radius:14px;border:1px solid var(--bd);background:var(--card);color:var(--tx);cursor:pointer;font-weight:700;font-size:1rem;transition:.25s}.part:hover{transform:translateY(-2px)}.part.on{background:var(--g);color:#3a1f2b;border:0}
.file{display:flex;justify-content:space-between;align-items:center;gap:10px;padding:12px 16px;border-radius:12px;background:var(--card);border:1px solid var(--bd);margin-bottom:10px;animation:pop .3s backwards}
.file span{overflow:hidden;text-overflow:ellipsis}
.file div{display:flex;gap:8px;flex:0 0 auto}
.file a,.file button{font-size:.85rem;padding:6px 14px;border-radius:20px;text-decoration:none;color:#fff;background:var(--a);border:0;cursor:pointer}
.file a{color:var(--tx);background:transparent;border:1px solid var(--bd)}
.empty{text-align:center;color:var(--mu);padding:30px}
iframe{width:100%;height:60vh;border:1px solid var(--bd);border-radius:12px;margin-top:12px;background:#fff}
@media(max-width:700px){nav a{margin-left:12px;font-size:.85rem}.nl{display:none}}
</style>
</head>
<body>
<div class="blob b1"></div><div class="blob b2"></div><div class="blob b3"></div>

<nav><div class="logo">&lt;<?= $h(explode(' ',$me['name'])[0]) ?>/&gt;</div>
<div><a href="#home" class="nl">Accueil</a><a href="#about">À propos</a><a href="#modules">Modules</a><a href="#projects">Projets</a><a href="#contact">Contact</a></div></nav>

<section id="home">
  <div class="hero-t rv">
    <div class="hi">BONJOUR, JE SUIS</div>
    <h1 class="grad"><?= $h($me['name']) ?></h1>
    <div class="type"><b id="t"></b><span class="cur">|</span></div>
    <div class="btns"><a class="btn p" href="#modules">Voir mes modules</a><a class="btn" href="#projects">Mes projets</a></div>
  </div>
  <div class="ph rv"><div class="in"><?= $h(mb_strtoupper(mb_substr($me['name'],0,1))) ?><img src="<?= $h($me['photo']) ?>" alt="" onerror="this.remove()"></div></div>
</section>

<section id="about">
  <div class="about rv">
    <div class="abp"><?= $h(mb_strtoupper(mb_substr($me['name'],0,1))) ?><img src="<?= $h($me['about_photo']) ?>" alt="" onerror="this.remove()"></div>
    <div class="abt">
      <h2>À propos <span>de moi</span></h2>
      <p><?= $h($me['about']) ?></p>
      <div class="stats">
        <div class="stat"><b class="grad" data-n="<?= count($modules) ?>">0</b>Modules</div>
        <div class="stat"><b class="grad" data-n="<?= count($projects) ?>">0</b>Projets</div>
        <div class="stat"><b class="grad" data-n="<?= array_sum(array_map(fn($d)=>cnt($d,'td')+cnt($d,'ateliers'),$data)) ?>">0</b>TD &amp; Ateliers</div>
      </div>
    </div>
  </div>
</section>

<section id="modules">
  <h2 class="rv">Mes <span>Modules</span></h2>
  <p class="sub rv">Clique sur un module pour consulter ses TDs, ateliers et projets.</p>
  <div class="grid">
  <?php foreach ($modules as $id => $m): $d = $data[$id]; ?>
    <div class="card rv" onclick="openMod('<?= $id ?>')">
      <div class="ico"><?= $m[1] ?></div><div class="mid"><?= $id ?></div>
      <h3><?= $h($m[0]) ?></h3>
      <div class="tags"><?php foreach (tagsOf($d) as $tg): ?><span class="tag"><?= $h($tg) ?></span><?php endforeach; ?></div>
      <div class="cnt"><?= cnt($d,'td') ?> TD · <?= cnt($d,'ateliers') ?> ateliers<?= cnt($d,'projets') > 0 ? ' · '.cnt($d,'projets').' projets' : '' ?></div>
    </div>
  <?php endforeach; ?>
  </div>
</section>

<section id="projects">
  <h2 class="rv">Mes <span>Projets</span></h2>
  <p class="sub rv">Les projets réalisés pendant la formation Full Stack.</p>
  <div class="grid">
  <?php foreach ($projects as $i => $p): ?>
    <div class="card rv" onclick="openProj(<?= $i ?>)">
      <div class="ico">💻</div>
      <h3><?= $h($p[0]) ?></h3>
      <p style="color:var(--mu);font-size:.95rem;margin-bottom:12px"><?= $h($p[1]) ?></p>
      <div class="tags"><?php foreach ($p[2] as $t): ?><span class="tag"><?= $h($t) ?></span><?php endforeach; ?></div>
      <div class="cnt"><?= count($pfiles["P$i"]) ?> document(s) · <a href="<?= $h($p[3]) ?>" target="_blank" onclick="event.stopPropagation()" style="color:var(--a)">GitHub ↗</a></div>
    </div>
  <?php endforeach; ?>
  </div>
</section>

<section id="contact" class="contact">
  <h2 class="rv">Me <span>contacter</span></h2>
  <p class="sub rv">Une idée, une opportunité ? Parlons-en !</p>
  <div class="soc rv">
    <a class="btn p" href="mailto:<?= $h($me['email']) ?>">✉️ Email</a>
    <a class="btn" href="<?= $h($me['github']) ?>" target="_blank">GitHub</a>
    <a class="btn" href="<?= $h($me['linkedin']) ?>" target="_blank">LinkedIn</a>
  </div>
</section>
<footer>© <?= date('Y') ?> <?= $h($me['name']) ?> — Code today. Online tomorrow.</footer>

<div class="modal" id="modal" onclick="if(event.target===this)closeM()">
  <div class="box">
    <div class="mh"><div><div class="mid" id="mid"></div><h2 id="mt" style="margin:0"></h2></div><button class="x" onclick="closeM()">✕</button></div>
    <div class="tabs" id="tabs"></div>
    <div id="list"></div>
    <div id="view"></div>
  </div>
</div>

<script>
const MODS=<?= json_encode($modules, JSON_UNESCAPED_UNICODE) ?>;
const DATA=<?= json_encode($data, JSON_UNESCAPED_UNICODE) ?>;
const PROJ=<?= json_encode($projects, JSON_UNESCAPED_UNICODE) ?>;
const PF=<?= json_encode($pfiles, JSON_UNESCAPED_UNICODE) ?>;
const LAB={td:'📘 TD',ateliers:'🛠️ Ateliers',projets:'📁 Projets'};
const $=id=>document.getElementById(id);
const esc=s=>s.replace(/[&<>"]/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c]));
let cur=null,part=0,ty=null;

function show(m){$('modal').classList.add('open');document.body.style.overflow='hidden';$('view').innerHTML=''}
function closeM(){$('modal').classList.remove('open');document.body.style.overflow=''}
function openMod(id){
  cur=id;part=0;show();$('mid').textContent=id;$('mt').textContent=MODS[id][0];
  $('tabs').style.display='block';draw();
}
function draw(){
  const P=DATA[cur],p=P[part],types=Object.keys(p.types);
  if(!types.includes(ty))ty=types[0];
  let h='';
  if(P.length>1)h+='<div class="parts">'+P.map((x,i)=>`<button class="part${i===part?' on':''}" onclick="setPart(${i})">${esc(x.label||'Général')}</button>`).join('')+'</div>';
  h+='<div class="tabs2">'+types.map(k=>`<button class="tab${k===ty?' on':''}" onclick="setTy('${k}')">${LAB[k]} (${p.types[k].length})</button>`).join('')+'</div>';
  $('tabs').innerHTML=h;render(p.types[ty]||[]);$('view').innerHTML='';
}
function setPart(i){part=i;draw()}
function setTy(k){ty=k;draw()}
function openProj(i){
  show();$('mid').textContent='PROJET';$('mt').textContent=PROJ[i][0];
  $('tabs').style.display='none';render(PF['P'+i]);
}
function render(f){
  $('list').innerHTML=f.length?f.map((x,i)=>`<div class="file" style="animation-delay:${i*.05}s"><span>📄 ${esc(x.name)}</span><div><button onclick="prev('${x.url}')">Voir</button><a href="${x.url}" download>Télécharger</a></div></div>`).join(''):'<div class="empty">Aucun fichier pour le moment 📭</div>';
}
function prev(u){$('view').innerHTML=`<iframe src="${u}"></iframe>`;$('view').scrollIntoView({behavior:'smooth'})}
document.addEventListener('keydown',e=>e.key==='Escape'&&closeM());

// typing
const W=<?= json_encode($me['typing'], JSON_UNESCAPED_UNICODE) ?>;let wi=0,ci=0,del=false;
(function ty(){const w=W[wi];$('t').textContent=w.slice(0,ci);
  if(!del&&ci===w.length){del=true;return setTimeout(ty,1400)}
  if(del&&ci===0){del=false;wi=(wi+1)%W.length}
  ci+=del?-1:1;setTimeout(ty,del?40:90)})();

// reveal + counters
const io=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('on');io.unobserve(e.target)}}),{threshold:.15});
document.querySelectorAll('.rv').forEach((el,i)=>{el.style.transitionDelay=(i%4)*.1+'s';io.observe(el)});
const co=new IntersectionObserver(es=>es.forEach(e=>{if(!e.isIntersecting)return;const el=e.target,n=+el.dataset.n;let v=0;
  const s=setInterval(()=>{v+=Math.max(1,Math.ceil(n/30));if(v>=n){v=n;clearInterval(s)}el.textContent=v},40);co.unobserve(el)}));
document.querySelectorAll('[data-n]').forEach(el=>co.observe(el));

// card glow
document.querySelectorAll('.card').forEach(c=>c.addEventListener('mousemove',e=>{const r=c.getBoundingClientRect();
  c.style.setProperty('--x',e.clientX-r.left+'px');c.style.setProperty('--y',e.clientY-r.top+'px')}));
</script>
</body>
</html>