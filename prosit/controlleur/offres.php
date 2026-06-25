<?php
require  '../models/db.php';

// Pagination
$parPage = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $parPage;

// Nombre total d'offres
$total = $pdo->query("SELECT COUNT(*) FROM offres")->fetchColumn();
$totalPages = ceil($total / $parPage);

// Requête avec LIMIT (requête préparée : protège contre les injections SQL)
$stmt = $pdo->prepare("SELECT * FROM offres LIMIT :start, :limit");
$stmt->bindValue(':start', $start, PDO::PARAM_INT);
$stmt->bindValue(':limit', $parPage, PDO::PARAM_INT);
$stmt->execute();
$offresPage = $stmt->fetchAll();

// Fonction de pagination
function afficherPaginationOffres($pageActuelle, $totalPages) {
    $html = '<ul class="pagination-list">';
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $pageActuelle) {
            $html .= '<li><span class="active">' . $i . '</span></li>';
        } else {
            $html .= '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
        }
    }
    $html .= '</ul>';
    return $html;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres en informatique — lebonplan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../vue/global.css">
</head>
<body>

    <header class="site-header">
        <div class="container nav-wrap">
            <a class="logo" href="../index.php">le<span>bonplan</span></a>
            <button class="nav-toggle" aria-label="Ouvrir le menu" aria-expanded="false">&#9776;</button>
            <nav class="site-nav">
                <a href="entreprises.php">Entreprises</a>
                <a href="offres.php">Offres</a>
                <a href="../vue/prosit.html">Postuler</a>
                <a href="../vue/wishlist.html">Wishlist</a>
                <a href="../vue/contact.html">Contact</a>
                <span class="nav-auth">
                    <a class="btn btn-ghost" href="../vue/connexion.html">Connexion</a>
                    <a class="btn btn-primary" href="../vue/inscription.html">Inscription</a>
                </span>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="page-title">
            <h1>Offres de stages et d'alternances</h1>
            <p>Spécialisées en informatique. Cliquez sur « Postuler » ou ajoutez une offre à votre wishlist.</p>
        </div>

        <div class="grid-offres">
            <?php foreach ($offresPage as $offre): ?>
                <article class="offre">
                    <h2><?= htmlspecialchars($offre['titre']) ?></h2>
                    <p class="entreprise"><?= htmlspecialchars($offre['entreprise']) ?> <span>· <?= htmlspecialchars($offre['lieu']) ?></span></p>
                    <div class="types">
                        <span class="tag"><?= htmlspecialchars($offre['types']) ?></span>
                        <span class="tag"><?= htmlspecialchars($offre['duree']) ?></span>
                    </div>
                    <p class="description"><?= htmlspecialchars($offre['description']) ?></p>
                    <div class="offre-actions">
                        <a class="btn-postuler" href="../vue/prosit.html?titre=<?= urlencode($offre['titre']) ?>&entreprise=<?= urlencode($offre['entreprise']) ?>&lieu=<?= urlencode($offre['lieu']) ?>&types=<?= urlencode($offre['types']) ?>&duree=<?= urlencode($offre['duree']) ?>&description=<?= urlencode($offre['description']) ?>">Postuler</a>
                        <button class="wishlist-btn"
                            data-id="<?= $offre['id'] ?>"
                            data-title="<?= htmlspecialchars($offre['titre']) ?>"
                            data-company="<?= htmlspecialchars($offre['entreprise']) ?>">♡ Wishlist</button>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <?= afficherPaginationOffres($page, $totalPages); ?>
    </main>

    <footer class="site-footer">
        <div class="footer-bottom">&copy; 2025 lebonplan — <a href="../vue/mention.html">Mentions légales</a></div>
    </footer>

    <script src="../vue/app.js"></script>
    <script src="../vue/offres.js"></script>
</body>
</html>
