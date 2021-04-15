<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Technos Prod</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <h1>Technos Prod</h1>
    <h2>Voici le résultat de votre commande</h2>
</header>
<main>
    <?php
        include_once("calcul.inc.php");
    ?>
    <section>
        <h2>Votre commande du <?php print date("d/m/Y, H:i") ?> </h2>
        <h3>Détail de votre commande:</h3>
        <p>Nombre de produits : </p>
        <ul>
            <li><?php print $_SESSION["tablettes"]; ?> : Tablettes</li>
            <li><?php print $_SESSION["pc"]; ?> : PC</li>
            <li><?php print $_SESSION["portable"]; ?> : Portables</li>
        </ul>
        <p>Le prix total de votre commande est de : <?php print $prix_total; ?>&euro;</p>
        <p>Adresse : <?php print $_SESSION["adress"] ?></p>
    </section>
</main>
<?php
    session_destroy();
?>
</body>