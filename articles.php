<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tous les Articles - Pernois Matériaux</title>
  <link rel="icon" href="Images/Logo.jpg" type="image/jpg">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <div class="container nav">
    <div class="brand">Pernois<span>Materiaux</span></div>
    <nav>
      <a href="index.php">Accueil</a>
      <a href="articles.php">Articles</a>
      <a href="#about">À propos</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>
</header>

<main class="container">

  <!-- Section Hero -->
  <section class="hero">
    <h1>Tous les articles</h1>
    <p>Découvrez l’ensemble de nos produits et matériaux disponibles.</p>
  </section>

  <!-- Section Articles -->
  <section class="grid" style="margin-top:2rem;">
    <?php
    // Tableau des articles avec images (comme dans index.php)
    $articles = [
        [
            'title' => 'Planches de coffrage',
            'tag' => 'Bois',
            'link' => '#',
            'image' => 'Images/coffrage.jpg'
        ],
        [
            'title' => 'Sac de ciments',
            'tag' => 'Poudre',
            'link' => '#',
            'image' => 'Images/ciment.jpg'
        ],
        [
            'title' => 'Sable',
            'tag' => 'Agrégats',
            'link' => '#',
            'image' => 'Images/sable.jpg'
        ],
        [
            'title' => 'Gravier',
            'tag' => 'Agrégats',
            'link' => '#',
            'image' => 'Images/gravier.jpg'
        ],
        [
            'title' => 'Plaques de plâtre',
            'tag' => 'Construction',
            'link' => '#',
            'image' => 'Images/placo.jpg'
        ]
    ];

    // Affichage des cartes
    foreach ($articles as $a) {
        echo '<article class="card">';
        if(isset($a['image'])) {
            echo '<img class="thumb" src="'.$a['image'].'" alt="'.$a['title'].'">';
        } else {
            echo '<div class="thumb"></div>';
        }
        echo '<div class="content">';
        echo '<span class="tag">'.$a['tag'].'</span>';
        echo '<div class="title">'.$a['title'].'</div>';
        echo '<div class="meta">';
        echo '<a class="btn" href="'.$a['link'].'">Voir →</a>';
        echo '</div>'; // meta
        echo '</div>'; // content
        echo '</article>';
    }
    ?>
  </section>

</main>

<footer>
  <div class="container">
    <p>© 2026 — Pernois Materiaux</p>
  </div>
</footer>

<script src="main.js"></script>
</body>
</html>
