<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TPN3</title>

    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
</head>
<body>
    <!-- Exo1 -->
    <?php
        $images = ["stock1.jpg", "stock2.jpg", "stock3.jpg"];
        shuffle($images);
    ?>

    <div class="container p-5">
        <div class="row">
            <div class="col-lg-4">
                <img src="images/<?php echo $images[0] ?>" height="200px" width="200px">
            </div>
            <div class="col-lg-4">
                <img src="images/<?php echo $images[1] ?>"  height="200px" width="200px">
            </div>
            <div class="col-lg-4">
                <img src="images/<?php echo $images[2] ?>"  height="200px" width="200px">
            </div>
        </div>
    </div>

    <!-- Exo2 -->
    <div class="container p-5">
        <?php
            $commandes = [];

            $fichierClients = fopen("clients.txt", "r") or die("Impossible d'ouvrir le fichier");

            while(!feof($fichierClients)) {
                $ligne = fgets($fichierClients);
                array_push($commandes, $ligne);
            }

            fclose($fichierClients);

            for ($i = 0; $i<count($commandes); $i++) {
                echo $commandes[$i]."<br>";
            }
        ?>
    </div>
    <!-- Exo3 -->
    <div class="container pt-5">
        <h1 class="border p-2 mb-4">Centrale d'achats</h1>
        <h3 class="mb-4">Commande clients</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Num de commande</td>
                    <td>Num de clients</td>
                    <td>Date de commande</td>
                    <td>Désignation article</td>
                    <td>Quantité</td>
                    <td>Prix Unitaire</td>
                </tr>
            </thead>
            <tbody>
                <?php
                     $commandes = [];

                    $fichierClients = fopen("clients.txt", "r") or die("Impossible d'ouvrir le fichier");

                    while(!feof($fichierClients)) {
                        $ligne = fgets($fichierClients);
                        array_push($commandes, $ligne);
                    }

                    fclose($fichierClients);

                    for ($i = 0; $i<count($commandes); $i++) {
                        $commande = explode(" | ", $commandes[$i]);
                        echo "<tr>
                            <td>".$commande[0]."</td>
                            <td>".$commande[1]."</td>
                            <td>".$commande[2]."</td>
                            <td>".$commande[3]."</td>
                            <td>".$commande[4]."</td>
                            <td>".$commande[5]."</td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>