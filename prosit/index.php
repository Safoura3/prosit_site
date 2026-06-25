<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lebonplan — Trouvez votre stage ou alternance en informatique</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vue/global.css">
</head>
<body>

    <!-- ===== En-tete ===== -->
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="logo" href="index.php">le<span>bonplan</span></a>
            <button class="nav-toggle" aria-label="Ouvrir le menu" aria-expanded="false">&#9776;</button>
            <nav class="site-nav">
                <a href="controlleur/entreprises.php">Entreprises</a>
                <a href="controlleur/offres.php">Offres</a>
                <a href="vue/prosit.html">Postuler</a>
                <a href="vue/wishlist.html">Wishlist</a>
                <a href="vue/contact.html">Contact</a>
                <span class="nav-auth">
                    <a class="btn btn-ghost" href="vue/connexion.html">Connexion</a>
                    <a class="btn btn-primary" href="vue/inscription.html">Inscription</a>
                </span>
            </nav>
        </div>
    </header>

    <!-- ===== Hero ===== -->
    <main>
        <section class="hero">
            <div class="container">
                <span class="eyebrow">Stages &amp; alternances en informatique</span>
                <h2>Votre carrière dans la tech <em>commence ici</em>.</h2>
                <p>Découvrez des offres de stage et d'alternance adaptées à votre profil, et postulez en quelques clics.</p>
                <div class="hero-actions">
                    <a href="controlleur/offres.php" class="btn btn-accent">Voir les offres</a>
                    <a href="controlleur/entreprises.php" class="btn btn-ghost">Explorer les entreprises</a>
                </div>
                <div class="hero-stats">
                    <div><div class="num">100+</div><div class="lbl">Offres en ligne</div></div>
                    <div><div class="num">50+</div><div class="lbl">Entreprises partenaires</div></div>
                    <div><div class="num">100%</div><div class="lbl">Dédié à l'informatique</div></div>
                </div>
            </div>
        </section>

        <!-- ===== Comment ca marche ===== -->
        <section class="section">
            <div class="container">
                <div class="section-head">
                    <span class="eyebrow">Comment ça marche</span>
                    <h2>Trouver un stage n'a jamais été aussi simple</h2>
                </div>
                <div class="grid-offres">
                    <div class="offre">
                        <span class="tag">1 — Parcourir</span>
                        <h2>Explorez les offres</h2>
                        <p class="description">Filtrez les stages et alternances en informatique et trouvez ceux qui correspondent à votre profil.</p>
                    </div>
                    <div class="offre">
                        <span class="tag">2 — Sauvegarder</span>
                        <h2>Créez votre wishlist</h2>
                        <p class="description">Ajoutez vos offres préférées à votre wishlist pour les retrouver et les comparer facilement.</p>
                    </div>
                    <div class="offre">
                        <span class="tag">3 — Postuler</span>
                        <h2>Candidatez en ligne</h2>
                        <p class="description">Envoyez votre candidature et votre CV directement depuis un formulaire pré-rempli avec l'offre.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ===== Pied de page ===== -->
    <footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <span class="logo">le<span style="color:#7c75f0">bonplan</span></span>
                <p>La plateforme qui connecte les étudiants en informatique aux meilleures offres de stage et d'alternance.</p>
            </div>
            <nav class="footer-links">
                <a href="controlleur/offres.php">Offres</a>
                <a href="controlleur/entreprises.php">Entreprises</a>
                <a href="vue/wishlist.html">Wishlist</a>
                <a href="vue/contact.html">Contact</a>
            </nav>
            <nav class="footer-links">
                <a href="vue/connexion.html">Connexion</a>
                <a href="vue/inscription.html">Inscription</a>
                <a href="vue/mention.html">Mentions légales</a>
            </nav>
        </div>
        <div class="footer-bottom">&copy; 2025 lebonplan — Tous droits réservés.</div>
    </footer>

    <script src="vue/app.js"></script>
</body>
</html>
