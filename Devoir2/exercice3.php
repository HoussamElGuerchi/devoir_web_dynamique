<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice3</title>
    <style>
        th, td {
            padding: 5px 15px;
        }
        button {
            margin: 5px 0px;
            padding: 5px 10px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <h1>Choisir une date</h1>
    <form action="exercice3.php" method="post">
        <table>
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Mois</th>
                    <th>Année</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select name="jour" id="">
                            <?php for ($i=1; $i<=31; $i++): ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                    <td>
                        <select name="mois" id="">
                            <?php for ($i=1; $i<=12; $i++): ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                    <td>
                        <select name="annee" id="">
                            <?php for ($i=2000; $i<=2020; $i++): ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" name="submit">Envoyer</button>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $jour = $_POST['jour'];
            $mois = $_POST['mois'];
            $annee = $_POST['annee'];

            if (checkdate($mois, $jour, $annee)) {
                $date = mktime(00,00,00,$mois, $jour, $annee);
                echo "La date saisie est: ".date("d/m/Y", $date);
                echo "<br>La date saisie est valide";
            } else {
                echo "La date saisie n'est pas valide";
            }

        }
    ?>
</body>
</html>