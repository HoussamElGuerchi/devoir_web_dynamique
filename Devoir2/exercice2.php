<?php
    // Extraction des commandes du fichier
    $fcommandes = fopen("commandes.txt", "r") or die("Impossible d'ouvrir le fichier");
    $listeCommande = [];
    while (!feof($fcommandes)) {
        $listeCommande[] = fgets($fcommandes);
    }
    fclose($fcommandes);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice2</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
        button {
            margin: 5px 0px;
            padding: 15px 30px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <h1>Commandes Clients</h1>

    <form action="exercice2.php" method="post">
        <button type="submit" name="separer">Séparer les commandes des clients</button>
    </form>

    <?php
        //Separer et archiver les commendes de chaque client
        if(isset($_POST['separer'])) {

            $cmdClient1 = fopen("pscde01_CLI1001.txt", "a") or die("Impossible d'ouvrir lie fichier");
            $cmdClient4 = fopen("pscde01_CLI1004.txt", "a") or die("Impossible d'ouvrir lie fichier");
            
            foreach($listeCommande as $commande) {
                $ligne = explode("|", $commande);
                if ($ligne[1] == "CLI1001") {
                    fwrite($cmdClient1, $commande);
                }
                if ($ligne[1] == "CLI1004") {
                    fwrite($cmdClient4, $commande);
                } 
            }

            fclose($cmdClient1);
            fclose($cmdClient4);
        }
    ?>

    <table>
        <thead>
            <tr>
                <th>N° Commande</th>
                <th>N° Client</th>
                <th>Date</th>
                <th>Article</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Date livraison</th>
                <th>Adresse Client</th>
            </tr>
        </thead>
        <tbody>
            <!-- Affochage des commandes -->
            <?php foreach($listeCommande as $ligne): ?>
            <?php $commande = explode("|", $ligne); ?>
            <tr>
                <?php foreach($commande as $col): ?>
                    <td><?php echo $col; ?></td>
                <?php endforeach;?>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>