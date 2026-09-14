<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Noura El Hamioui | Full Stack Developer</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fffafa;
            color: #241b20;
            overflow-x: hidden;
        }

        /* ================= NAVBAR ================= */

        .side-nav {
            position: fixed;
            left: 0;
            top: 0;
            width: 85px;
            height: 100vh;
            background: #ffffff;
            border-right: 1px solid #f0dfe5;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;

            padding: 35px 0;
            z-index: 1000;
        }

        .nav-logo {
            font-family: Georgia, serif;
            font-size: 20px;
            font-weight: bold;
            color: #d94c73;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
            gap: 28px;
            align-items: center;
        }

        .nav-links a {
            writing-mode: vertical-rl;
            transform: rotate(180deg);

            text-decoration: none;
            color: #777;
            font-size: 12px;
            letter-spacing: 1px;
            transition: .3s;
        }

        .nav-links a:hover {
            color: #d94c73;
        }

        .nav-social {
            font-size: 11px;
            color: #aaa;
            writing-mode: vertical-rl;
        }

        /* ================= MAIN ================= */

        main {
            margin-left: 85px;
        }

        section {
            min-height: 100vh;
            padding: 100px 8%;
        }

        /* ================= HOME ================= */

        .home {
            position: relative;
            min-height: 100vh;

            display: flex;
            align-items: center;
            overflow: hidden;

            background:
                radial-gradient(
                    circle at 85% 20%,
                    rgba(247, 190, 207, .45),
                    transparent 28%
                ),
                #fffafa;
        }

        .home-content {
            position: relative;
            z-index: 2;
            width: 70%;
        }

        .small-title {
            color: #d94c73;
            font-size: 14px;
            letter-spacing: 4px;
            margin-bottom: 25px;
        }

        .home h1 {
            font-family: Georgia, serif;
            font-size: clamp(70px, 11vw, 155px);
            line-height: .8;
            font-weight: normal;
            letter-spacing: -7px;
            color: #241b20;
        }

        .surname {
            color: transparent;
            -webkit-text-stroke: 1px #d94c73;
            margin-left: 90px;
        }

        .job {
            margin-top: 55px;
            margin-left: 15px;

            font-size: 25px;
            font-weight: bold;
            letter-spacing: 8px;
            color: #d94c73;
        }

        .description {
            margin-top: 20px;
            max-width: 470px;
            line-height: 1.8;
            color: #777;
        }

        .home-buttons {
            margin-top: 35px;
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 15px 27px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 13px;
            transition: .3s;
        }

        .btn-main {
            background: #d94c73;
            color: white;
        }

        .btn-main:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(217,76,115,.25);
        }

        .btn-outline {
            border: 1px solid #d94c73;
            color: #d94c73;
        }

        .btn-outline:hover {
            background: #d94c73;
            color: white;
        }

        /* IMAGE */

        .home-image {
            position: absolute;
            right: 8%;
            top: 50%;
            transform: translateY(-50%);

            width: 340px;
            height: 450px;

            border-radius: 170px 170px 20px 20px;
            background: #f5c9d6;

            overflow: hidden;
            box-shadow: 0 30px 70px rgba(217,76,115,.15);
        }

        .home-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .number {
            position: absolute;
            right: 35px;
            bottom: 30px;

            font-family: Georgia, serif;
            font-size: 16px;
            color: #d94c73;
        }

        /* ================= ABOUT ================= */

        .about {
            position: relative;
            background: #ffffff;
        }

        .section-number {
            position: absolute;
            left: 5%;
            top: 50px;

            font-family: Georgia, serif;
            font-size: 170px;
            color: #fff0f4;
            z-index: 0;
        }

        .section-title {
            position: relative;
            z-index: 2;
            font-family: Georgia, serif;
            font-size: 65px;
            font-weight: normal;
            margin-bottom: 60px;
        }

        .about-grid {
            position: relative;
            z-index: 2;

            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 100px;
        }

        .about-left {
            font-size: 24px;
            line-height: 1.6;
            font-family: Georgia, serif;
        }

        .about-right {
            color: #777;
            line-height: 1.9;
        }

        .about-info {
            margin-top: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .info-item {
            border-top: 1px solid #ead8de;
            padding-top: 15px;
        }

        .info-item span {
            display: block;
            color: #aaa;
            font-size: 12px;
            margin-bottom: 7px;
        }

        /* ================= SKILLS ================= */

        .skills {
            background: #fff5f8;
        }

        .skills-header {
            display: flex;
            justify-content: space-between;
            align-items: end;
            margin-bottom: 70px;
        }

        .skills-header p {
            color: #888;
            max-width: 350px;
            line-height: 1.7;
        }

        .skill {
            display: grid;
            grid-template-columns: 180px 1fr 60px;
            align-items: center;
            gap: 30px;

            padding: 23px 0;
            border-bottom: 1px solid #efdce2;
        }

        .skill-name {
            font-weight: bold;
        }

        .bar {
            height: 5px;
            background: #eadde1;
            border-radius: 10px;
            overflow: hidden;
        }

        .bar span {
            display: block;
            height: 100%;
            background: #d94c73;
        }

        .percentage {
            text-align: right;
            color: #d94c73;
            font-weight: bold;
        }

        /* ================= MODULES ================= */

        .modules {
            background: white;
        }

        .timeline {
            max-width: 850px;
            margin: auto;
            position: relative;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 50%;
            top: 0;
            width: 1px;
            height: 100%;
            background: #e8ccd5;
        }

        .module {
            width: 50%;
            padding: 30px 50px;
            position: relative;
        }

        .module:nth-child(even) {
            margin-left: 50%;
        }

        .module::before {
            content: "";
            position: absolute;
            top: 38px;

            width: 12px;
            height: 12px;

            border-radius: 50%;
            background: #d94c73;
        }

        .module:nth-child(odd)::before {
            right: -6px;
        }

        .module:nth-child(even)::before {
            left: -6px;
        }

        .module h3 {
            font-family: Georgia, serif;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .module p {
            color: #888;
            line-height: 1.6;
        }

        /* ================= PROJECTS ================= */

        .projects {
            background: #fff5f8;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 25px;
        }

        .project {
            min-height: 260px;
            padding: 30px;

            background: white;
            border: 1px solid #f1dfe5;

            position: relative;
            overflow: hidden;

            transition: .4s;
        }

        .project:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(100,40,60,.08);
        }

        .project:nth-child(1) {
            grid-column: span 7;
        }

        .project:nth-child(2) {
            grid-column: span 5;
        }

        .project:nth-child(3) {
            grid-column: span 5;
        }

        .project:nth-child(4) {
            grid-column: span 7;
        }

        .project-number {
            color: #d94c73;
            font-size: 12px;
        }

        .project h3 {
            font-family: Georgia, serif;
            font-size: 30px;
            margin: 35px 0 15px;
        }

        .project p {
            color: #888;
            line-height: 1.6;
        }

        .project-link {
            position: absolute;
            bottom: 25px;
            right: 25px;

            color: #d94c73;
            text-decoration: none;
            font-size: 13px;
        }

        /* ================= CONTACT ================= */

        .contact {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: space-between;

            background: #241b20;
            color: white;
        }

        .contact h2 {
            font-family: Georgia, serif;
            font-size: clamp(55px, 8vw, 110px);
            font-weight: normal;
            line-height: .9;
        }

        .contact h2 span {
            color: #ef8eaa;
        }

        .contact-info {
            width: 300px;
        }

        .contact-info p {
            color: #c7bfc2;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .contact-info a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 12px 0;
        }

        .contact-info a:hover {
            color: #ef8eaa;
        }

        /* ================= FOOTER ================= */

        footer {
            margin-left: 85px;
            padding: 20px 8%;
            background: #241b20;
            color: #8e8588;
            border-top: 1px solid #493e42;
            font-size: 12px;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 1000px) {

            .home-image {
                width: 270px;
                height: 350px;
                right: 4%;
            }

            .home-content {
                width: 75%;
            }

            .home h1 {
                font-size: 90px;
            }

            .about-grid {
                gap: 40px;
            }
        }

        @media (max-width: 750px) {

            .side-nav {
                width: 100%;
                height: 65px;
                bottom: 0;
                top: auto;

                flex-direction: row;
                padding: 0 20px;

                border-right: none;
                border-top: 1px solid #f0dfe5;
            }

            .nav-links {
                flex-direction: row;
                gap: 15px;
            }

            .nav-links a {
                writing-mode: initial;
                transform: none;
                font-size: 9px;
            }

            .nav-social {
                display: none;
            }

            main {
                margin-left: 0;
            }

            footer {
                margin-left: 0;
                margin-bottom: 65px;
            }

            section {
                padding: 80px 7%;
            }

            .home {
                display: block;
                padding-top: 110px;
            }

            .home-content {
                width: 100%;
            }

            .home h1 {
                font-size: 70px;
                letter-spacing: -4px;
            }

            .surname {
                margin-left: 30px;
            }

            .job {
                font-size: 16px;
                letter-spacing: 4px;
                margin-top: 35px;
            }

            .home-image {
                position: relative;
                top: auto;
                right: auto;
                transform: none;

                width: 230px;
                height: 290px;

                margin: 50px auto 0;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .section-title {
                font-size: 50px;
            }

            .skill {
                grid-template-columns: 110px 1fr 45px;
                gap: 12px;
                font-size: 13px;
            }

            .timeline::before {
                left: 8px;
            }

            .module {
                width: 100%;
                margin-left: 0 !important;
                padding-left: 40px;
                padding-right: 0;
            }

            .module::before,
            .module:nth-child(odd)::before,
            .module:nth-child(even)::before {
                left: 2px;
                right: auto;
            }

            .projects-grid {
                display: block;
            }

            .project {
                margin-bottom: 20px;
            }

            .contact {
                display: block;
            }

            .contact-info {
                margin-top: 50px;
                width: 100%;
            }
        }
    </style>
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="side-nav">

    <div class="nav-logo">NE</div>

    <div class="nav-links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#modules">Modules</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="nav-social">
        PORTFOLIO · 2026
    </div>

</nav>


<main>

<!-- ================= HOME ================= -->

<section class="home" id="home">

    <div class="home-content">

        <div class="small-title">
            PORTFOLIO / 2026
        </div>

        <h1>
            Basma
        </h1>

        <h1 class="surname">
           ELMAIMOUNI
        </h1>

        <div class="job">
            FULL STACK DEVELOPER
        </div>

        <p class="description">
            Étudiante en 2ème année de Développement Digital
            Full Stack à ISMONTIC Tanger. 
            J’aime créer des interfaces web modernes,
            simples et élégantes.
        </p>

        <div class="home-buttons">
            <a href="#projects" class="btn btn-main">
                Voir mes projets
            </a>

            <a href="#contact" class="btn btn-outline">
                Me contacter
            </a>
        </div>

    </div>

    <!-- Remplace cette image par ta photo -->
    <div class="home-image">

        <img src="Basma.jpeg" alt="Basma">

    </div>

    <div class="number">
        01 / 06
    </div>

</section>


<!-- ================= ABOUT ================= -->

<section class="about" id="about">

    <div class="section-number">
        01
    </div>

    <h2 class="section-title">
        About Me
    </h2>

    <div class="about-grid">

        <div class="about-left">

            Je transforme mes idées
            en expériences digitales
            simples et créatives.

        </div>

        <div class="about-right">

            <p>
                Je suis Basma Elmaimouni, étudiante en deuxième
                année de Développement Digital Full Stack
                à ISMONTIC Tanger.
            </p>

            <br>

            <p>
                Je m'intéresse particulièrement au développement
                web et au design des sites. Je suis actuellement
                en train de découvrir et développer mes compétences
                dans plusieurs technologies.
            </p>

            <br>

            <p>
                Mon objectif est de développer mes compétences,
                intégrer le monde professionnel et créer
                mes propres projets digitaux.
            </p>

            <div class="about-info">

                <div class="info-item">
                    <span>FORMATION</span>
                    2ème année
                </div>

                <div class="info-item">
                    <span>ÉCOLE</span>
                    ISMONTIC Tanger
                </div>

                <div class="info-item">
                    <span>DOMAINE</span>
                    Full Stack
                </div>

                <div class="info-item">
                    <span>INTÉRÊT</span>
                    Web Design
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= SKILLS ================= -->

<section class="skills" id="skills">

    <div class="skills-header">

        <div>
            <div class="small-title">
                02 / EXPERTISE
            </div>

            <h2 class="section-title">
                My Skills
            </h2>
        </div>

        <p>
            Les technologies et outils que j'utilise
            ou que je suis actuellement en train
            de développer.
        </p>

    </div>


    <div class="skill">

        <div class="skill-name">HTML</div>

        <div class="bar">
            <span style="width:90%"></span>
        </div>

        <div class="percentage">90%</div>

    </div>


    <div class="skill">

        <div class="skill-name">CSS</div>

        <div class="bar">
            <span style="width:85%"></span>
        </div>

        <div class="percentage">85%</div>

    </div>


    <div class="skill">

        <div class="skill-name">Bootstrap</div>

        <div class="bar">
            <span style="width:80%"></span>
        </div>

        <div class="percentage">80%</div>

    </div>


    <div class="skill">

        <div class="skill-name">JavaScript</div>

        <div class="bar">
            <span style="width:65%"></span>
        </div>

        <div class="percentage">65%</div>

    </div>


    <div class="skill">

        <div class="skill-name">PHP</div>

        <div class="bar">
            <span style="width:60%"></span>
        </div>

        <div class="percentage">60%</div>

    </div>


    <div class="skill">

        <div class="skill-name">Python</div>

        <div class="bar">
            <span style="width:70%"></span>
        </div>

        <div class="percentage">70%</div>

    </div>


    <div class="skill">

        <div class="skill-name">SQL / MySQL</div>

        <div class="bar">
            <span style="width:65%"></span>
        </div>

        <div class="percentage">65%</div>

    </div>


    <div class="skill">

        <div class="skill-name">UML</div>

        <div class="bar">
            <span style="width:70%"></span>
        </div>

        <div class="percentage">70%</div>

    </div>


    <div class="skill">

        <div class="skill-name">Excel</div>

        <div class="bar">
            <span style="width:75%"></span>
        </div>

        <div class="percentage">75%</div>

    </div>


    <div class="skill">

        <div class="skill-name">PowerPoint</div>

        <div class="bar">
            <span style="width:85%"></span>
        </div>

        <div class="percentage">85%</div>

    </div>

</section>


<!-- ================= MODULES ================= -->

<section class="modules" id="modules">

    <div class="small-title">
        03 / EDUCATION
    </div>

    <h2 class="section-title">
        My Modules
    </h2>

    <div class="timeline">

        <div class="module">

            <h3>Développement Web</h3>

            <p>
                HTML, CSS, Bootstrap, JavaScript,
                PHP et création de sites web.
            </p>

        </div>


        <div class="module">

            <h3>Base de données</h3>

            <p>
                MCD, MLD, SQL, MySQL et
                gestion des données.
            </p>

        </div>


        <div class="module">

            <h3>Programmation</h3>

            <p>
                Python, programmation orientée objet
                et algorithmique.
            </p>

        </div>


        <div class="module">

            <h3>UML</h3>

            <p>
                Diagrammes UML, cas d'utilisation,
                classes, associations et héritage.
            </p>

        </div>


        <div class="module">

            <h3>Soft Skills</h3>

            <p>
                Communication, travail en équipe,
                présentation et organisation.
            </p>

        </div>

    </div>

</section>


<!-- ================= PROJECTS ================= -->

<section class="projects" id="projects">

    <div class="small-title">
        04 / SELECTED WORK
    </div>

    <h2 class="section-title">
        My Projects
    </h2>


    <div class="projects-grid">

        <div class="project">

            <div class="project-number">
                01 — WEB
            </div>

            <h3>E-Commerce Website</h3>

            <p>
                Création d'une interface e-commerce
                moderne pour présenter et vendre
                des produits.
            </p>

            <a href="#" class="project-link">
                View project →
            </a>

        </div>


        <div class="project">

            <div class="project-number">
                02 — DESIGN
            </div>

            <h3>Portfolio Website</h3>

            <p>
                Portfolio personnel présentant
                mes compétences, projets et parcours.
            </p>

            <a href="#" class="project-link">
                View project →
            </a>

        </div>


        <div class="project">

            <div class="project-number">
                03 — JS
            </div>

            <h3>Weather App</h3>

            <p>
                Application météo avec une interface
                simple et interactive.
            </p>

            <a href="#" class="project-link">
                View project →
            </a>

        </div>


        <div class="project">

            <div class="project-number">
                04 — DATABASE
            </div>

            <h3>Student Management</h3>

            <p>
                Système permettant de gérer les
                informations et données des étudiants.
            </p>

            <a href="#" class="project-link">
                View project →
            </a>

        </div>

    </div>

</section>


<!-- ================= CONTACT ================= -->

<section class="contact" id="contact">

    <div>

        <div class="small-title">
            05 / CONTACT
        </div>

        <h2>
            Let's<br>
            <span>Talk.</span>
        </h2>

    </div>


    <div class="contact-info">

        <p>
            Vous avez un projet, une idée ou
            simplement envie d'échanger ?
            N'hésitez pas à me contacter.
        </p>

        <a href="mailto:basmaelmaimouni6@gmail.com">
            basmaelmaimouni6@gmail.com
        </a>

        <a href="#">
            GitHub ↗
        </a>

        <a href="#">
            LinkedIn ↗
        </a>

        <p>
            Tanger, Maroc
        </p>

    </div>

</section>

</main>


<footer>

    © 2026 Basma Elmaimouni — Full Stack Developer

</footer>


</body>
</html>