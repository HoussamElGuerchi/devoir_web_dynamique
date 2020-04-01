<?php

    $fichier = fopen("login.txt", "r");
    $utilisateurs = [];
    while (!feof($fichier)) {
        $utilisateurs[] = fgets($fichier);
    }
    fclose($fichier);

    $emails = [];
    $motdepasses = [];

    foreach($utilisateurs as $util) {
        $util = explode("|", $util);
        $emails[] = $util[0];
        $motdepasses[] = $util[1];
    }

    function validerLogin($login) {
        if (in_array($login, $emails, true)) {
            return true;
        }
        return false;
    }

    function validerMotDePasse($motpasse) {
        if (in_array($motpasse, $motdepasses, true)) {
            return true;
        }
        return false;
    }

    function verifierAuth() {
        $login = $_POST['login'];
        $mdp = $_POST['motdepasse'];

        if (validerLogin($login) && validerMotDePasse($mdp)) {
            echo "Authentification réussie" ;
        } else {
            echo "Login inexistant ou Mot de passe invalide";
        }
    }

    verifierAuth();
?>