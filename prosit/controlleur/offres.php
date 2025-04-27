<?php
require  '../models/db.php';

// Pagination
$parPage = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $parPage;

// Nombre total d'offres
$total = $pdo->query("SELECT COUNT(*) FROM offres")->fetchColumn();
$totalPages = ceil($total / $parPage);

// Requête avec LIMIT
$stmt = $pdo->prepare("SELECT * FROM offres LIMIT :start, :limit");
$stmt->bindValue(':start', $start, PDO::PARAM_INT);
$stmt->bindValue(':limit', $parPage, PDO::PARAM_INT);
$stmt->execute();
$offresPage = $stmt->fetchAll();

// Fonction de pagination (remplace ton fichier pagination_offres.php)
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
    <title>Offres - Informatique</title>
    <link rel="stylesheet" href="../vue/offres.css">
</head>
<body>

<header>
    <h1>Offres de stages et alternances en informatique</h1>
    <nav>
        <a href="../index.php">Accueil</a>
        <a href="entreprises.php">Entreprises</a>
        <a href="../vue/wishlist.html">Wishlist</a>
        <a href="../vue/contact.html">Contact</a>
    </nav>
</header>

<main>
    <?php foreach ($offresPage as $offre): ?>
        <div class="offre">
            <h2><?= htmlspecialchars($offre['titre']) ?></h2>
            <p class="entreprise"><?= htmlspecialchars($offre['entreprise']) ?> – <span><?= htmlspecialchars($offre['lieu']) ?></span></p>
            <p class="types"><?= htmlspecialchars($offre['types']) ?> • <?= htmlspecialchars($offre['duree']) ?></p>
            <p class="description"><?= htmlspecialchars($offre['description']) ?></p>
            <!---<a href="../vue/prosit.html" class="btn-postuler">Postuler</a>-->
            <a href="../vue/prosit.html?titre=<?= urlencode($offre['titre']) ?>&entreprise=<?= urlencode($offre['entreprise']) ?>&lieu=<?= urlencode($offre['lieu']) ?>&types=<?= urlencode($offre['types']) ?>&duree=<?= urlencode($offre['duree']) ?>&description=<?= urlencode($offre['description']) ?>" class="btn-postuler">Postuler</a>

            <button class="wishlist-btn"
                data-id="<?= $offre['id'] ?>"
                data-title="<?= htmlspecialchars($offre['titre']) ?>"
                data-company="<?= htmlspecialchars($offre['entreprise']) ?>">Ajouter à la wishlist</button>
        </div>
    <?php endforeach; ?>

    <div class="pagination">
        <?= afficherPaginationOffres($page, $totalPages); ?>
    </div>
</main>
<script src="../vue/offres.js"></script>
</body>
</html>
