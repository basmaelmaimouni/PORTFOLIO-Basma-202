<?php
/* ================== CONFIG (بدّل غير هنا) ================== */
// المسارات: على Vercel كيتخدم public/ من الجذر (/docs/...)، وفاللوكال (XAMPP) كيتخدم ../public
$url = '';
$me = [
  'name'    => 'Basma Elmaimouni',                       // سميتك
  'role'    => 'Développeuse Full Stack',
  'typing'  => ['Développeuse Full Stack', 'Passionné par le Web', 'Créatif & Curieux'],
  'about'   => "Étudiante en 2ème année Développement Digital option Full Stack. J'aime transformer des idées en applications web modernes, propres et performantes. Ce portfolio regroupe mes ateliers, TDs et projets réalisés durant l'année.",
  'email'   => 'basmaelmaimouni6@gmail.com',
  'github'  => 'https://github.com/basmaelmaimouni',
  'linkedin'=> 'https://www.linkedin.com/in/basma-el-maimouni-b38a26395/',
  'photo'   => $url.'/images/'.rawurlencode('Basma.jpeg'),          // تصويرتك لفوق (Hero)
  'about_photo' => $url.'/images/'.rawurlencode('photo_2026-11-26_12-31-51.jpg'), // تصويرة About me
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
// المشاريع
$projects = [
  ['Acheto', 'Projet Acheto : présentation, objectifs et fonctionnalités principales.', ['PHP','MySQL','JS'], 'https://github.com/karim/projet1', 'docs/projets/acheto', null, 'acheto-logo.jpg'],
  ['Projet fin formation', 'Projet de fin de formation Full Stack : conception et réalisation complète de l’application.', ['HTML','CSS','JS'], 'https://github.com/karim/projet2', 'docs/projets/projet-fin-formation'],
  ['NOMAS — Nouvelle Maison du Sud', 'Site web de NOMAS — Nouvelle Maison du Sud.', ['Site web'], 'http://127.0.0.1:5500/NOMAS.html', 'docs/projets/nomas', 'Voir le projet ↗', 'nomas-logo.jpg'],
];
/* ===================== كتب هنا الملفات ديالك ديريكت =====================
   كل ملف: ['السمية اللي كتبان فالموقع', 'الطريق']
   الطريق كيبدا من docs/  (بلا public/)  وكيفما كاين بالضبط فالـ dossier:
     public/docs/M-201/Figma/Atelier Figma-1.pdf   ==>   'docs/M-201/Figma/Atelier Figma-1.pdf'
   ⚠ على Vercel الحروف الكبيرة والصغيرة مهمين: Figma ≠ figma  /  m-201 ≠ M-201
   الأنواع: 'td' | 'ateliers' | 'projets'
   ================================================================== */
$files = [
  'M201' => [
    'Figma' => [
      'ateliers' => [
        ['Atelier Figma 1', 'docs/M-201/Figma/Atelier Figma-1.pdf'],
        ['Atelier Figma 2', 'docs/M-201/Figma/Atelier Figma-2.pdf'],
        ['Atelier Figma 3', 'docs/M-201/Figma/Atelier Figma-3.pdf'],
      ],
    ],
    'UML' => [
      'td' => [
        // بدّل ... بالسمية الكاملة ديال الملف وحيّد //
         ['Ex App diagramme 1',  'docs/M-201/UML/ex_App_diagramme_de_class.pdf'],
         ['Ex App diagramme 2',  'docs/M-201/UML/ex_App_diagramme_use_case.pdf'],
         ['TD Diagramme',        'docs/M-201/UML/TD_Diagramme_de_séquence.pdf'],
         ['TD1 Diagramme',       'docs/M-201/UML/TD1_diagramme_de_class.pdf'],
         ['TD2 Diagramme',       'docs/M-201/UML/TD2_diagramme_use_case.pdf'],
      ],
      'ateliers' => [
        ['Atelier 1', 'docs/M-201/UML/Atelier 1.pdf'],
      ],
    ],
  ],
  'M202' => [
    'WaterFall' => [
      'ateliers' => [
         ['Atelier 1', 'docs/M-202/WaterFall/Atlelier 1/EXERCICES.pdf'],
      ],
    ],
    'Scrum Agile' => [
      'ateliers' => [
         ['Atelier 2', 'docs/M-202/Scrum Agile/Atelier 2 Scrum Agile.pdf'],
         ['Atelier 3', 'docs/M-202/Scrum Agile/Atelier3.pdf'],
         ['Atelier 4', 'docs/M-202/Scrum Agile/Acheto_Etapes Atelier 4.pdf'],
         ['Atelier 5', 'docs/M-202/Scrum Agile/Atelier 5.pdf'],
         ['Atelier 6', 'https://atelier6-one.vercel.app/'],
         ['Atelier 7', 'docs/M-202/Scrum Agile/Rapport_Atelier7_GitLab_SonarQube.pdf']
      ],
    ],
  ],

  'M203' => [
    'SQL' => [
      'ateliers' => [
        ['Atelier 1', 'docs/m-203/SQL/Rapport_Atelier_1.pdf'],
        ['Atelier 2', 'docs/m-203/SQL/Rapport_Atelier_2.pdf'],
        ['Atelier 3', 'docs/m-203/SQL/Rapport_Atelier_3.pdf'],
        ['Rapport Acheto', 'docs/m-203/SQL/Rapport_Acheto_Fonction_Procedure.pdf'],
        ['Atelier 4', 'docs/m-203/SQL/Rapport_Atelier_4.pdf'],
        ['Atelier 5', 'docs/m-203/SQL/Rapport_Atelier_5.pdf'],
        ['Atelier 6', 'docs/m-203/SQL/Rapport_Atelier_6.pdf'],
        ['Atelier 7', 'docs/m-203/SQL/Rapport_Atelier_7.pdf'],
        ['Examen_FF_session_juin_2026', 'docs/m-203/SQL/Examen_FF_session_juin_2026_Basma_Elmaimouni.pdf'],
        
      ],
    ],
    'MongoDb' => [
      'ateliers' => [
        ['Atelier 1', 'docs/m-203/MongoDb/rapport_atelier1_mongodb.pdf'],
        ],
      ],
  ],
  'M204' => [],
  'M205' => [],
  'M206' => [],
];
// ملفات المشاريع: 0 = Acheto ، 1 = Projet fin formation ، 2 = NOMAS
$projectFiles = [
  0 => [
     [' Acheto', 'https://acheto-6yzg7meac-norahamioui761-pixels-projects.vercel.app/'],
  ],
  1 => [
    // ['Rapport projet fin formation', 'docs/projets/projet-fin-formation/rapport.pdf'],
  ],
  2 => [
    ['NOMAS — Nouvelle Maison du Sud', 'https://travail-co.vercel.app/'],
  ],
];
/* ================== من هنا لتحت ما تقيسش والو ================== */
function mkUrl($path){ global $url; return $url.'/api/pdf.php?file='.rawurlencode($path); }
function mkList($l){ return array_map(fn($f) => ['name' => $f[0], 'url' => preg_match('/^https?:\\/\\//', $f[1]) ? $f[1] : mkUrl($f[1]), 'external' => (bool) preg_match('/^https?:\\/\\//', $f[1])], $l); }
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
:root{--bg:#F5F3EB;--page-bg:#BBC5AA;--card:rgba(255,255,255,.82);--bd:rgba(7,59,131,.18);--tx:#191A20;--mu:#073B83;--a:#1264C0;--b:#D6E83F;--c:#073B83;--accent-light:#56A9E8;--g:linear-gradient(135deg,var(--a),var(--accent-light))}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;background:var(--page-bg);color:var(--tx);overflow-x:hidden;line-height:1.6}
.blob{position:fixed;border-radius:50%;filter:blur(90px);opacity:.18;z-index:-1;animation:float 18s ease-in-out infinite}
.b1{width:420px;height:420px;background:var(--a);top:-100px;left:-100px}
.b2{width:380px;height:380px;background:var(--b);bottom:-80px;right:-80px;animation-delay:-6s}
.b3{width:300px;height:300px;background:var(--c);top:45%;left:55%;animation-delay:-12s}
@keyframes float{50%{transform:translate(60px,-50px) scale(1.15)}}
nav{position:fixed;top:0;width:100%;display:flex;justify-content:space-between;align-items:center;padding:14px 6%;backdrop-filter:blur(14px);background:rgba(245,243,235,.92);border-bottom:1px solid var(--bd);z-index:50}
.logo{font-weight:800;font-size:1.3rem;background:var(--g);-webkit-background-clip:text;background-clip:text;color:transparent}
nav .nav-links{display:flex;align-items:center;gap:22px;max-width:72vw;min-width:0;overflow-x:auto;scrollbar-width:none}
nav .nav-links::-webkit-scrollbar{display:none}
nav a{color:var(--mu);text-decoration:none;font-size:.95rem;transition:.3s;white-space:nowrap}
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
.btn.p{background:var(--c);border:0;color:#fff;box-shadow:0 10px 30px rgba(7,59,131,.22)}
.btn:hover{transform:translateY(-4px)}
.ph{position:relative;width:min(320px,70vw);aspect-ratio:1;flex:0 0 auto}
.ph::before{content:"";position:absolute;inset:-8px;border-radius:50%;background:conic-gradient(var(--a),var(--b),var(--c),var(--a));animation:spin 6s linear infinite}
.ph .in{position:absolute;inset:0;border-radius:50%;overflow:hidden;background:var(--accent-light);display:grid;place-items:center;font-size:5rem;font-weight:800;border:6px solid var(--bg)}
.ph img,.abp img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 18%}
@keyframes spin{to{transform:rotate(360deg)}}
.about{display:flex;gap:40px;align-items:center;flex-wrap:wrap}
.abp{position:relative;flex:0 0 340px;max-width:100%;height:430px;border-radius:24px;overflow:hidden;background:var(--g);display:grid;place-items:center;font-size:4rem;transform:rotate(-3deg);transition:.4s;box-shadow:0 20px 50px rgba(7,59,131,.2)}
.abp:hover{transform:rotate(0) scale(1.03)}
.abt{flex:1 1 320px;color:var(--mu);font-size:1.05rem}
.stats{display:flex;gap:16px;margin-top:22px;flex-wrap:wrap}
.stat{flex:1;min-width:100px;padding:16px;border-radius:16px;background:var(--card);border:1px solid var(--bd);text-align:center}
.stat b{font-size:2rem;display:block}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:22px}
.card{position:relative;padding:26px;border-radius:20px;background:var(--card);border:1px solid var(--bd);backdrop-filter:blur(10px);cursor:pointer;transition:transform .25s,border-color .3s;overflow:hidden}
.card::after{content:"";position:absolute;inset:0;background:radial-gradient(circle at var(--x,50%) var(--y,0),rgba(86,169,232,.24),transparent 60%);opacity:0;transition:.3s}
.card:hover{border-color:var(--a)}.card:hover::after{opacity:1}
.card>*{position:relative;z-index:1}
.ico{font-size:2.2rem}.project-logo{width:88px;height:74px;object-fit:contain;border-radius:12px;background:rgba(255,255,255,.55);margin-bottom:8px}.mid{color:var(--a);font-weight:700;font-size:.85rem;letter-spacing:2px;margin-top:8px}
.card h3{margin:4px 0 12px}
.tags{display:flex;gap:6px;flex-wrap:wrap}
.tag{font-size:.75rem;padding:3px 10px;border-radius:20px;background:rgba(18,100,192,.1);color:var(--c)}
.cnt{margin-top:14px;font-size:.85rem;color:var(--mu)}
.rv{opacity:0;transform:translateY(40px);transition:1s cubic-bezier(.2,.8,.2,1)}.rv.on{opacity:1;transform:none}
.certificate-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(min(100%,260px),1fr));gap:22px}
.certificate-card{width:100%;padding:0;text-align:left;font:inherit;color:var(--tx);background:var(--card);border:1px solid var(--bd);border-radius:20px;overflow:hidden;cursor:pointer;transition:transform .25s,border-color .3s}
.certificate-card:hover,.certificate-card:focus-visible{transform:translateY(-4px);border-color:var(--a)}
.certificate-card:focus-visible{outline:2px solid var(--b);outline-offset:3px}
.certificate-card img{display:block;width:100%;aspect-ratio:1.55;object-fit:cover}
.certificate-details{padding:18px}
.certificate-details h3{margin-bottom:6px}
.certificate-details p,.certificate-details time{color:var(--mu);font-size:.92rem}
.certificate-lightbox{position:fixed;inset:0;z-index:110;display:none;place-items:center;padding:16px;background:rgba(7,59,131,.82);backdrop-filter:blur(8px)}
.certificate-lightbox.open{display:grid}
.certificate-lightbox-box{width:min(1100px,100%);max-height:94vh;overflow:auto;padding:20px;background:#073B83;border:1px solid rgba(245,243,235,.35);border-radius:24px;animation:pop .35s;color:#F5F3EB}
.certificate-lightbox-header,.certificate-lightbox-actions{display:flex;justify-content:space-between;align-items:center;gap:14px}
.certificate-lightbox-header h2{margin:0;font-size:1.5rem}
.certificate-lightbox-image{display:block;max-width:100%;max-height:72vh;margin:16px auto;object-fit:contain;border-radius:12px}
.certificate-lightbox-actions{flex-wrap:wrap}
.certificate-lightbox-issuer{color:var(--mu)}
.certificate-verify{display:inline-block;padding:9px 20px;border-radius:30px;text-decoration:none;font-weight:700;color:var(--c);background:var(--b);transition:transform .25s}
.certificate-verify:hover{transform:translateY(-2px)}
.contact{text-align:center}
.soc{display:flex;gap:14px;justify-content:center;flex-wrap:wrap;margin-top:20px}
footer{text-align:center;color:var(--mu);padding:40px 0;font-size:.9rem}
.modal{position:fixed;inset:0;background:rgba(7,59,131,.72);backdrop-filter:blur(8px);display:none;place-items:center;z-index:100;padding:16px}
.modal.open{display:grid}
.box{width:min(1000px,100%);max-height:92vh;overflow:auto;background:#073B83;border:1px solid rgba(245,243,235,.35);border-radius:24px;padding:26px;animation:pop .35s;color:#F5F3EB}
@keyframes pop{from{transform:scale(.9);opacity:0}}
.mh{display:flex;justify-content:space-between;align-items:start;gap:10px}
.x{background:var(--card);border:1px solid var(--bd);color:var(--tx);width:38px;height:38px;border-radius:50%;cursor:pointer;font-size:1.1rem;flex:0 0 auto}
.tabs{display:flex;gap:8px;margin:18px 0;flex-wrap:wrap}
.tab{padding:8px 18px;border-radius:30px;border:1px solid var(--bd);background:transparent;color:var(--mu);cursor:pointer;font-size:.95rem}
.box .tab{color:#F5F3EB;border-color:rgba(245,243,235,.35)}
.tab.on{background:var(--g);color:#fff;border:0}
.parts,.tabs2{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:12px}.part{padding:10px 24px;border-radius:14px;border:1px solid var(--bd);background:var(--card);color:var(--tx);cursor:pointer;font-weight:700;font-size:1rem;transition:.25s}.part:hover{transform:translateY(-2px)}.part.on{background:var(--g);color:#fff;border:0}
.file{display:flex;justify-content:space-between;align-items:center;gap:10px;padding:12px 16px;border-radius:12px;background:var(--card);border:1px solid var(--bd);margin-bottom:10px;animation:pop .3s backwards}
.file span{overflow:hidden;text-overflow:ellipsis;color:var(--c)}
.file div{display:flex;gap:8px;flex:0 0 auto}
.file a,.file button{font-size:.85rem;padding:6px 14px;border-radius:20px;text-decoration:none;color:var(--c);background:var(--b);border:0;cursor:pointer}
.file a.file-open{color:var(--c);background:var(--b);border:0}
.empty{text-align:center;color:var(--mu);padding:30px}
.box .empty{color:#F5F3EB}
iframe{width:100%;height:60vh;border:1px solid var(--bd);border-radius:12px;margin-top:12px;background:#fff}
@media(max-width:700px){nav{gap:12px}nav .nav-links{gap:14px;max-width:72vw}nav a{font-size:.85rem}.nl{display:none}.certificate-lightbox-box{padding:14px}.certificate-lightbox-header h2{font-size:1.2rem}}
</style>
</head>
<body>
<div class="blob b1"></div><div class="blob b2"></div><div class="blob b3"></div>

<nav><div class="logo">&lt;<?= $h(explode(' ',$me['name'])[0]) ?>/&gt;</div>
<div class="nav-links"><a href="#home" class="nl">Accueil</a><a href="#certificates">Certificats</a><a href="#about">À propos</a><a href="#modules">Modules</a><a href="#projects">Projets</a><a href="#contact">Contact</a></div></nav>

<section id="home">
  <div class="hero-t rv">
    <div class="hi">BONJOUR, JE SUIS</div>
    <h1 class="grad"><?= $h($me['name']) ?></h1>
    <div class="type"><b id="t"></b><span class="cur">|</span></div>
    <div class="btns"><a class="btn p" href="#modules">Voir mes modules</a><a class="btn" href="#projects">Mes projets</a></div>
  </div>
  <div class="ph rv"><div class="in"><?= $h(mb_strtoupper(mb_substr($me['name'],0,1))) ?><img src="<?= $h($me['photo']) ?>" alt="" onerror="this.remove()"></div></div>
</section>

<section id="certificates">
  <h2 class="rv">Mes <span>Certificats</span></h2>
  <p class="sub rv">Quelques certifications obtenues durant mon parcours.</p>
  <div class="certificate-grid" id="certificateGrid"></div>
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
      <div class="ico"><?php if (!empty($p[6])): ?><img class="project-logo" src="<?= $h($url.'/images/'.rawurlencode($p[6])) ?>" alt="Logo <?= $h($p[0]) ?>"><?php else: ?>💻<?php endif; ?></div>
      <h3><?= $h($p[0]) ?></h3>
      <p style="color:var(--mu);font-size:.95rem;margin-bottom:12px"><?= $h($p[1]) ?></p>
      <div class="tags"><?php foreach ($p[2] as $t): ?><span class="tag"><?= $h($t) ?></span><?php endforeach; ?></div>
      <div class="cnt"><?= count($pfiles["P$i"]) ?> élément(s) · <a href="<?= $h($p[3]) ?>" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation()" style="color:var(--a)"><?= $h($p[5] ?? 'Voir projet ↗') ?></a></div>
    </div>
  <?php endforeach; ?>
  </div>
</section>

<section id="contact" class="contact">
  <h2 class="rv">Me <span>contacter</span></h2>
  <p class="sub rv">Une idée, une opportunité ? Parlons-en !</p>
  <div class="soc rv">
    <a class="btn p" href="mailto:<?= $h($me['email']) ?>">✉️ Email</a>
    <a class="btn" href="<?= $h($me['github']) ?>" target="_blank" rel="noopener noreferrer">GitHub</a>
    <a class="btn" href="<?= $h($me['linkedin']) ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a>
  </div>
</section>
<footer>© <?= date('Y') ?> <?= $h($me['name']) ?> — Code today. Online tomorrow.</footer>

<div class="certificate-lightbox" id="certificateLightbox" role="dialog" aria-modal="true" aria-labelledby="certificateLightboxTitle" onclick="if(event.target===this)closeCertificate()">
  <div class="certificate-lightbox-box">
    <div class="certificate-lightbox-header">
      <h2 id="certificateLightboxTitle"></h2>
      <button class="x" type="button" aria-label="Fermer le certificat" onclick="closeCertificate()">✕</button>
    </div>
    <img class="certificate-lightbox-image" id="certificateLightboxImage" alt="">
    <div class="certificate-lightbox-actions">
      <p class="certificate-lightbox-issuer" id="certificateLightboxIssuer"></p>
      <a class="certificate-verify" id="certificateVerifyLink" href="#" target="_blank" rel="noopener noreferrer">Vérifier ↗</a>
    </div>
  </div>
</div>

<div class="modal" id="modal" onclick="if(event.target===this)closeM()">
  <div class="box">
    <div class="mh"><div><div class="mid" id="mid"></div><h2 id="mt" style="margin:0"></h2></div><button class="x" onclick="closeM()">✕</button></div>
    <div class="tabs" id="tabs"></div>
    <div id="list"></div>
    <div id="view"></div>
  </div>
</div>

<script>
const CERTIFICATES = [
  {
    image: '/images/Asana%20certificate.png',
    title: 'AI Studio Foundations Skill Badge',
    issuer: 'Asana',
    date: 'Novembre 2026',
    verifyUrl: 'https://asana.com/fr/certifications?utm_source=linkedin&utm_medium=social&utm_campaign=cert25&utm_content=badge_social_share'
  },
  {
    image: '/images/Professional%20completion%20certificate.png',
    title: 'HTML Course Completion',
    issuer: 'Simplilearn',
    date: '13 janvier 2026',
    verifyUrl: 'https://www.simplilearn.com/free-html-course-for-beginners-skillup'
  },
  {
    image: '/images/Excel%20course%20completion%20certificate.png',
    title: 'Microsoft Office Specialist: Excel Associate (Microsoft 365 Apps)',
    issuer: 'Microsoft',
    date: 'Juin 2026',
    verifyUrl: 'https://learn.microsoft.com/en-us/credentials/certifications/mos-excel-associate-m365-apps/?practice-assessment-type=certification'
  }
];
const MODS=<?= json_encode($modules, JSON_UNESCAPED_UNICODE) ?>;
const DATA=<?= json_encode($data, JSON_UNESCAPED_UNICODE) ?>;
const PROJ=<?= json_encode($projects, JSON_UNESCAPED_UNICODE) ?>;
const PF=<?= json_encode($pfiles, JSON_UNESCAPED_UNICODE) ?>;
const LAB={td:'📘 TD',ateliers:'🛠️ Ateliers',projets:'📁 Projets'};
const $=id=>document.getElementById(id);
const esc=s=>s.replace(/[&<>"]/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c]));
let cur=null,part=0,ty=null;
let certificateTrigger=null;

function show(m){$('modal').classList.add('open');document.body.style.overflow='hidden';$('view').innerHTML=''}
function closeM(){$('modal').classList.remove('open');document.body.style.overflow=''}
function renderCertificates(){
  $('certificateGrid').innerHTML=CERTIFICATES.map((certificate,index)=>`<article class="certificate-card rv" role="button" tabindex="0" data-certificate-index="${index}" aria-label="Afficher le certificat ${esc(certificate.title)}">
    <img src="${esc(certificate.image)}" alt="Certificat : ${esc(certificate.title)}" loading="lazy">
    <div class="certificate-details"><h3>${esc(certificate.title)}</h3><p>${esc(certificate.issuer)}</p><time>${esc(certificate.date)}</time></div>
  </article>`).join('');
  $('certificateGrid').querySelectorAll('.rv').forEach((el,i)=>{el.style.transitionDelay=(i%4)*.1+'s';io.observe(el)});
}
function openCertificate(index,trigger){
  const certificate=CERTIFICATES[index];
  if(!certificate)return;
  certificateTrigger=trigger;
  $('certificateLightboxTitle').textContent=certificate.title;
  $('certificateLightboxImage').src=certificate.image;
  $('certificateLightboxImage').alt=`Certificat : ${certificate.title}`;
  $('certificateLightboxIssuer').textContent=`${certificate.issuer} · ${certificate.date}`;
  $('certificateVerifyLink').href=certificate.verifyUrl;
  $('certificateLightbox').classList.add('open');
  document.body.style.overflow='hidden';
  $('certificateLightbox').querySelector('.x').focus();
}
function closeCertificate(){
  const lightbox=$('certificateLightbox');
  if(!lightbox.classList.contains('open'))return;
  lightbox.classList.remove('open');
  document.body.style.overflow='';
  if(certificateTrigger){certificateTrigger.focus();certificateTrigger=null}
}
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
function renderOld(f){
  $('list').innerHTML=f.length?f.map((x,i)=>`<div class="file" style="animation-delay:${i*.05}s"><span>📄 ${esc(x.name)}</span><div><button onclick="prev('${x.url}')">Voir</button><a href="${x.url}" download>Télécharger</a></div></div>`).join(''):'<div class="empty">Aucun fichier pour le moment 📭</div>';
}
function render(f){
  $('list').innerHTML=f.length?f.map((x,i)=>`<div class="file" style="animation-delay:${i*.05}s"><span>📄 ${esc(x.name)}</span><div>${x.external?`<a class="file-open" href="${esc(x.url)}" target="_blank" rel="noopener noreferrer">Voir</a>`:`<button onclick="prev('${x.url}')">Voir</button><a href="${x.url}" download>Télécharger</a>`}</div></div>`).join(''):'<div class="empty">Aucun fichier pour le moment 📭</div>';
}
function prev(u){if(u.startsWith('https://')){window.open(u,'_blank','noopener,noreferrer');return}$('view').innerHTML=`<iframe src="${u}"></iframe>`;$('view').scrollIntoView({behavior:'smooth'})}
document.addEventListener('keydown',e=>{if(e.key==='Escape'){closeCertificate();closeM()}});

// typing
const W=<?= json_encode($me['typing'], JSON_UNESCAPED_UNICODE) ?>;let wi=0,ci=0,del=false;
(function ty(){const w=W[wi];$('t').textContent=w.slice(0,ci);
  if(!del&&ci===w.length){del=true;return setTimeout(ty,1400)}
  if(del&&ci===0){del=false;wi=(wi+1)%W.length}
  ci+=del?-1:1;setTimeout(ty,del?40:90)})();

// reveal + counters
const io=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('on');io.unobserve(e.target)}}),{threshold:.15});
document.querySelectorAll('.rv').forEach((el,i)=>{el.style.transitionDelay=(i%4)*.1+'s';io.observe(el)});
$('certificateGrid').addEventListener('click',e=>{const card=e.target.closest('.certificate-card');if(card)openCertificate(Number(card.dataset.certificateIndex),card)});
$('certificateGrid').addEventListener('keydown',e=>{if((e.key==='Enter'||e.key===' ')&&e.target.matches('.certificate-card')){e.preventDefault();openCertificate(Number(e.target.dataset.certificateIndex),e.target)}});
renderCertificates();
const co=new IntersectionObserver(es=>es.forEach(e=>{if(!e.isIntersecting)return;const el=e.target,n=+el.dataset.n;let v=0;
  const s=setInterval(()=>{v+=Math.max(1,Math.ceil(n/30));if(v>=n){v=n;clearInterval(s)}el.textContent=v},40);co.unobserve(el)}));
document.querySelectorAll('[data-n]').forEach(el=>co.observe(el));

// card glow
document.querySelectorAll('.card').forEach(c=>c.addEventListener('mousemove',e=>{const r=c.getBoundingClientRect();
  c.style.setProperty('--x',e.clientX-r.left+'px');c.style.setProperty('--y',e.clientY-r.top+'px')}));
</script>
</body>
</html>
