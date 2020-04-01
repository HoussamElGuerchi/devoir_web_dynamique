<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice1</title>
</head>
<body style="padding: 5% 10%;">
    <h1>Exercice1</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="chaine" placeholder="chaine à couper" required>
        <input type="text" name="delimiteur" placeholder="délimiteur" required>
        <button type="submit" name="submit">Découper</button>
    </form>

    <?php 
        if (isset($_POST["submit"])) {
            $chaine = $_POST["chaine"];
            $delimiteur = $_POST["delimiteur"];

            $resultat = explode($delimiteur, $chaine);

            echo "<table>";
            foreach($resultat as $mot) {
                echo "<tr><td>".$mot."</td></tr>";
            }
            echo "</table>";
        }
    ?>

</body>
</html>