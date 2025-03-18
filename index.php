<!DOCTYPE html>
<html lang="fr" data-wf-page="677da079f20133629c39f405" data-wf-site="677d8349ca091f8535fc00b0" data-wf-locale="de" class="w-mod-js w-mod-ix wf-inter-n1-active wf-inter-n2-active wf-inter-n3-active wf-inter-n4-active wf-inter-n5-active wf-inter-n6-active wf-inter-n7-active wf-inter-n8-active wf-inter-n9-active wf-inter-i1-active wf-inter-i2-active wf-inter-i3-active wf-inter-i4-active wf-inter-i5-active wf-inter-i6-active wf-inter-i7-active wf-inter-i8-active wf-inter-i9-active wf-active">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZeReseau - Bientôt disponible</title>

    <!-- Feuilles de style -->
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/font.css" media="all">
    
    <!-- Préchargement des polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
    <script src="./assets/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: [
                    "Inter:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic"
                ]
            }
        });

        function updateCountdown() {
        const targetDate = new Date('April 1, 2025 00:00:00').getTime();
        const now = new Date().getTime();
        const difference = targetDate - now;

        if (difference <= 0) {
            document.getElementById('countdown').innerHTML = "Lancement imminent !";
            return;
        }

        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        document.getElementById('countdown').innerHTML = `${days}j - ${hours}h - ${minutes}m - ${seconds}s`;
    }

    setInterval(updateCountdown, 1000);
    updateCountdown(); // Mise à jour immédiate au chargement
        
    </script>

    <!-- Favicon -->
    <link href="/assets/Icon_Logo.png" rel="shortcut icon" type="image/x-icon">
</head>
<body>
    <!-- Section Héros -->
    <section class="section hero-section">
        <div class="container">
            <div class="hero-container-01" data-w-id="a8ca0928-23a3-ce20-565c-8131a0079514">
                <div class="hero-text-holder" style="filter: blur(0px); opacity: 1; transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotate(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <a href="/"><img src="/assets/Final_Logo_White.png" alt="Logo ZeReseau" class="logo"></a>
                    <h1 class="title">Financez l'innovation, développez l'avenir</h1>
                </div>
                <div class="hero-content-holder">
                    <div class="paragraph-holder" style="opacity: 1; filter: blur(0px); transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotate(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <p>
                            <strong>ZeReseau arrive bientôt !</strong>
                            La seule plateforme qui transforme les idées innovantes en succès entrepreneuriaux.
                        </p>
                    </div>
                    <div class="form-wrapper" style="opacity: 1; filter: blur(0px); transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotate(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <div class="form-block w-form">
                            <form id="email-form" name="email-form" data-name="Abonnement" method="post" class="form">
                                <input class="text-field w-input" maxlength="256" name="email" data-name="Email" placeholder="Saisissez votre adresse mail ..." type="email" id="email" required>
                                <input type="submit" data-wait="..." class="submit-button w-button" value="">
                            </form>
                        </div>
                        <div class="form-cta">
                            <div class="persons-holder">
                                <div class="person-container">
                                    <img src="/assets/Icon_Logo_FD_Fond.png" loading="lazy" alt="" class="person">
                                </div>
                                <div class="person-container">
                                    <img src="/assets/Icon_Logo_FD_Fond.png" loading="lazy" alt="" class="person">
                                </div>
                                <div class="person-container">
                                    <img src="/assets/Icon_Logo_FD_Fond.png" loading="lazy" alt="" class="person">
                                </div>
                            </div>
                            <div id="message"></div>
                            <p class="paragraph-simple">Recevez des mises à jour !</p>
                        </div>
                        <div id="countdown" class="countdown"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-design">
            <img src="assets/hero.svg" loading="lazy" alt="" class="main-image _01" style="opacity: 1; filter: blur(0px); transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotate(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
            <img src="assets/fond.svg" loading="lazy" alt="" class="boxes bot" style="opacity: 0.5; filter: blur(0px); transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotate(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
            <img src="assets/fond.svg" loading="lazy" alt="" class="boxes top" style="opacity: 0.5; filter: blur(0px); transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotate(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
        </div>
    </section>

    <!-- Section Pied de page -->
    <footer class="section">
        <div class="footer-holder">
            <div class="footer-container">
                <div class="container">
                    <div class="footer-divider">
                        <div class="footer-copyright-holder">
                            <a href="/" class="footer-copyright-center dark-link">
                                Copyright © 2025 ZeReseau. Tous Droits Réservés
                            </a>
                        </div>
                        <div class="footer-copyright-holder">
                            <a href="https://github.com/HenockMkb" class="footer-copyright-center dark-link">
                                Par. Henock Mkb
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="./assets/jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript" crossorigin="anonymous"></script>
    <script src="./assets/main.js" type="text/javascript"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Envoi à l'admin
        $toAdmin = "contact@ze-reseau.com";
        $subjectAdmin = "Nouvel abonnement ZeReseau";
        $messageAdmin = "Nouvelle inscription : " . $email;
        $headersAdmin = "From: noreply@ze-reseau.com" . "\r\n" .
                        "Reply-To: " . $email . "\r\n" .
                        "X-Mailer: PHP/" . phpversion();
        
        mail($toAdmin, $subjectAdmin, $messageAdmin, $headersAdmin);

        // Envoi au nouvel abonné
        $toUser = $email;
        $subjectUser = "Bienvenue sur ZeReseau !";
        $messageUser = "
        <html>
        <head>
            <title>Bienvenue sur ZeReseau !</title>
        </head>
        <body>
            <h2>Merci de vous être abonné à notre newsletter !</h2>
            <p>Vous recevrez bientôt des mises à jour sur nos projets et nos opportunités de financement.</p>
            <p>Si vous n'êtes pas à l'origine de cette demande, ignorez simplement ce message.</p>
            <br>
            <p>À très bientôt,<br>L'équipe ZeReseau</p>
        </body>
        </html>
        ";

        $headersUser = "MIME-Version: 1.0" . "\r\n";
        $headersUser .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        $headersUser .= "From: ZeReseau <noreply@ze-reseau.com>" . "\r\n";

        mail($toUser, $subjectUser, $messageUser, $headersUser);

        // Redirection avec message JS
        echo "<script>alert('Merci pour votre inscription ! Un e-mail de confirmation vous a été envoyé.'); window.location.href = '/';</script>";
    } else {
        echo "<script>alert('Adresse e-mail invalide.'); window.location.href = '/';</script>";
    }
}
?>

