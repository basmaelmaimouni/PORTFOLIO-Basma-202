<?php

/* ================== PDF VIEWER ================== */
if (isset($_GET['pdf'])) {
    $relativePdf = ltrim((string)$_GET['pdf'], '/');

    $publicRoot = realpath(__DIR__.'/../public');
    if (!$publicRoot) {
        $publicRoot = realpath(__DIR__.'/public');
    }

    if (!$publicRoot) {
        http_response_code(500);
        exit('Dossier public introuvable.');
    }

    $pdfFile = realpath($publicRoot . '/' . $relativePdf);

    if (!$pdfFile || !is_file($pdfFile) || strncmp($pdfFile, $publicRoot . DIRECTORY_SEPARATOR, strlen($publicRoot . DIRECTORY_SEPARATOR)) !== 0) {
        http_response_code(404);
        exit('PDF introuvable.');
    }

    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . basename($pdfFile) . '"');
    header('Content-Length: ' . filesize($pdfFile));
    readfile($pdfFile);
    exit;
}

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

  'github'  => 'https://github.com/basma',

  'linkedin'=> 'https://linkedin.com/in/basma',

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
