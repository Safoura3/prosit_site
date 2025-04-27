<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lebonplan - Accueil</title>
    <link rel="stylesheet" href="vue/acceuil.css">
</head>
<body>
    <!-- En-tête -->
    <header>
        <div class="logo">
            <h1>lebonplan</h1>
        </div>
        <nav>
            <div>
                <a href="controlleur/entreprises.php" >Entreprises</a>
                <a href="controlleur/offres.php" >Offres</a>
                <a href="vue/prosit.html" >postuler</a>
                <a href="vue/wishlist.html">Wishlist</a>
                <a href="vue/contact.html" >Contact</a>
            </div>
        </nav>
        <div class="auth-links">
            <a href="vue/connexion.html" id="connexion">Connexion</a>
            <a href="vue/inscription.html" id="inscription">Inscription</a>
        </div>
    </header>

    <!-- Section principale -->
    <main>
        <!-- Section Hero -->
        <section class="hero">
            <div class="hero-content">
                <h2>Votre carrière commence ici</h2>
                <p>Découvrez des milliers d'offres de stage et d'emploi adaptées à votre profil.</p>
                <a href="controlleur/offres.php" class="btn">Voir les offres</a>
            </div>
        </section>

        <!-- Section À propos -->
        <section class="about">
            <h2>À propos de lebonplan</h2>
            <p>lebonplan est une plateforme dédiée à la mise en relation des étudiants et des entreprises pour des opportunités de stage et d'emploi. Notre mission est de faciliter votre insertion professionnelle en vous proposant des offres adaptées à vos compétences et aspirations.</p>
        </section>

        <!-- Section Statistiques -->
        <section class="stats">
            <div class="stat">
                <h3>500+</h3>
                <p>Entreprises partenaires</p>
            </div>
            <div class="stat">
                <h3>10,000+</h3>
                <p>Offres disponibles</p>
            </div>
            <div class="stat">
                <h3>15,000+</h3>
                <p>Étudiants inscrits</p>
            </div>
        </section>

        <!-- Section Témoignages -->
        <section class="testimonials">
            <h2>Ce que disent nos utilisateurs</h2>
            <div class="testimonial">
                <p>"Grâce à lebonplan, j'ai trouvé le stage de mes rêves en quelques clics. Je recommande vivement cette plateforme à tous les étudiants en recherche d'opportunités."</p>
                <h4>- Marie Dupont</h4>
            </div>
            <div class="testimonial">
                <p>"Une interface intuitive et des offres pertinentes. lebonplan m'a permis de décrocher un emploi rapidement après mes études."</p>
                <h4>- Jean Martin</h4>
            </div>
        </section>

        <!-- Section Appel à l'action -->
        <section class="cta">
            <h2>Prêt à démarrer votre carrière ?</h2>
            <p>Inscrivez-vous dès maintenant et accédez à des milliers d'offres adaptées à votre profil.</p>
            <a href="vue/inscription.html" class="btn">S'inscrire</a>
        </section>
    </main>

    <!-- Pied de page -->
    <footer>
        <p>&copy; 2025 lebonplan. Tous droits réservés.</p>
        <div class="footer-links">
            <a href="vue/mention.html">Mentions légales</a>
            <a href="politique-confidentialite.html">Politique de confidentialité</a>
            <a href="vue/contact.html">Contact</a>
        </div>
    </footer>
</body>
</html>
