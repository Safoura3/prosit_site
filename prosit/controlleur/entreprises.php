<?php
require '../models/db.php';

// Pagination
$entreprisesParPage = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $entreprisesParPage;

// Requête préparée (protège contre les injections SQL)
$stmt = $pdo->prepare("SELECT * FROM lentreprise LIMIT :start, :limit");
$stmt->bindValue(':start', $start, PDO::PARAM_INT);
$stmt->bindValue(':limit', $entreprisesParPage, PDO::PARAM_INT);
$stmt->execute();
$entreprises = $stmt->fetchAll();

// Nombre total d'entreprises
$total = $pdo->query("SELECT COUNT(*) FROM lentreprise")->fetchColumn();
$totalPages = ceil($total / $entreprisesParPage);

// Fonction de pagination
function pagination($pageActuelle, $totalPages) {
    $html = '<ul class="pagination">';
    if ($pageActuelle > 1) {
        $html .= '<li><a href="?page=' . ($pageActuelle - 1) . '">&laquo;</a></li>';
    }
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $pageActuelle) {
            $html .= '<li class="active"><span>' . $i . '</span></li>';
        } else {
            $html .= '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
        }
    }
    if ($pageActuelle < $totalPages) {
        $html .= '<li><a href="?page=' . ($pageActuelle + 1) . '">&raquo;</a></li>';
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
    <title>Entreprises — lebonplan</title>
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
            <h1>Nos entreprises partenaires</h1>
            <p>Les entreprises qui recrutent des stagiaires et alternants en informatique.</p>
        </div>

        <div class="table-card" style="margin-top:24px;">
            <table>
                <thead>
                    <tr>
                        <th>Nom de l'entreprise</th>
                        <th>Localisation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($entreprises as $e): ?>
                    <tr>
                        <td><?= htmlspecialchars($e['nom']) ?></td>
                        <td><?= htmlspecialchars($e['localisation']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?= pagination($page, $totalPages); ?>
    </main>

    <footer class="site-footer">
        <div class="footer-bottom">&copy; 2025 lebonplan — <a href="../vue/mention.html">Mentions légales</a></div>
    </footer>

    <script src="../vue/app.js"></script>
</body>
</html>
