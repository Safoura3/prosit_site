<?php
require '../models/db.php';

// Pagination
$entreprisesParPage = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $entreprisesParPage;

// Récupérer les données paginées
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
    <title>Liste des entreprises</title>
    <link rel="stylesheet" href="../vue/entreprises.css">
</head>
<body>

    <header>
        <h1>Liste des entreprises</h1>
    </header>
    <div><a href="../index.php">Accueil</a>
        <a href="offres.php">Offres</a>
        <a href="../vue/wishlist.html">Wishlist</a>
        <a href="../vue/contact.html">Contact</a>
        <a href="../vue/prosit.html" >Postuler</a>
                
            </div>
    <main>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
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

            <!-- Pagination -->
            <?= pagination($page, $totalPages); ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 - lebonplan</p>
    </footer>

</body>
</html>
