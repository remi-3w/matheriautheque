<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page avec Cadres Améliorés</title>
    <link rel="stylesheet" href="style.css"> <!-- Lien vers le fichier CSS -->
</head>
<body>
    <?php
    // Se connecter à la base de données SQLite
    $pdo = new PDO('sqlite:dvh.db');

    // Vérifier la connexion
    if (!$pdo) {
        die("Impossible de se connecter à la base de données SQLite");
    }

    // Requête SQL pour récupérer les données
    $query = "SELECT * FROM nom_de_la_table";
    $statement = $pdo->query($query);

    // Récupérer les résultats sous forme de tableau associatif
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>


    <header class="header">
        <div class="logo">
            <img src="logo.png" alt="Logo"> <!-- Remplacez "logo.png" par le chemin de votre logo -->
        </div>
        <nav class="nav-links">
            <a href="#">Rechercher</a>
            <a href="#">Catégorie</a>
        </nav>
    </header>
    <?php foreach ($results as $row):?>     
    <div class="container">
             
       
            <div class="card">
                <div class="card-header">
                    <div class="header-cell left"></div>
                        <div class="header-cell center">
                            <h2><?php echo ($row['colonne3']); ?></h2>
                        </div>
                    <div class="header-cell right">
                    <?php echo ($row['colonne3']); ?>
                    
                    </div>
                </div>
                <div class="card-content">
                    <?php echo ($row['colonne3']); ?><br>
                    appelation commerciale <?php echo ($row['colonne5']); ?>
                </div>
            </div>
      
      
            <div class="card">
                <div class="card-header">
                    <div class="header-cell left"></div>
                    <div class="header-cell center">
                        <h2><?php echo ($row['colonne2']); ?></h2>
                    </div>
                    <div class="header-cell right">
                        <p>Donnée 2</p>
                    </div>
                </div>
                <div class="card-content">
                    <p> Dimension<?php echo ($row['colonne6']); ?><br>
                   densité <?php echo ($row['colonne7']); ?><br>
                    resistance au feu <?php  echo ($row['colonne8']); ?><br>
                    type<?php echo ($row['colonne4']); ?></p><br>
                </div>
            </div>
    
            
    </div>  <br>    <?php endforeach; ?> 
 
    
</body>
</html>