<?php if (!isset($_SERVER['HTTP_HX_REQUEST'])): ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="Description" content="Forsiden">
        <meta name="Keywords" content="miljøbevidst, klimavenlig, bæredygtig, grøn, omstilling, miljø, venlige, produkter">
        <title>Home</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="../static/css/style.css">
        <script src="../static/js/nav.js" defer></script>
        <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    </head>

    <body hx-boost="true" hx-target="main">
        <div class="wrapper">
            <header>
                <pre class="ASCIItitle">


    +---------------------------------------+
    | ___________  ___   _____ _   _   ___  |
    ||_   _| ___ \/ _ \ /  ___| | | | / _ \ |
    |  | | | |_/ / /_\ \\ `--.| |_| |/ /_\ \|
    |  | | |    /|  _  | `--. \  _  ||  _  ||
    |  | | | |\ \| | | |/\__/ / | | || | | ||
    |  \_/ \_| \_\_| |_/\____/\_| |_/\_| |_/|
    +---------------------------------------+
                
                
               </pre>
                <h1 class="subtitel">Coding, music and other personal projects!</h1>
            </header>
            <br>
            <nav>
                <button class="burger" id="burgerBtn">☰</button>
                <ul class="nav-tabs" id="navTabs">
                    <li><a href="/personal_site_php/public/">Home</a></li>
                    <li><a href="/personal_site_php/public/projects">Projects</a></li>
                    <li><a href="/personal_site_php/public/contact">Contact</a></li>
                </ul>
            </nav>
            <main>
            <?php endif; ?>