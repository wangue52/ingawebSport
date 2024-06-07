<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";

    try{
        $pdo = new PDO("mysql:host=$servername;dbname=madb", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $login = $_POST['email'];
        $pwd = $_POST['password'];

        if(isset($login) && isset($pwd)){
            //Selectionnez toutes les donnees des tables utilisateur et personnel
            $select_utilisateur = $pdo->prepare("SELECT * FROM `utilisateur` WHERE `e-mail` = '$login' ");
            $select_personnel = $pdo->prepare("SELECT * FROM `personnel` WHERE `e-mail_personnel` = '$login' ");
            $select_organisateur = $pdo->prepare("SELECT * FROM `organisateur` WHERE `e-mail_organisateur` = '$login' ");

            $select_utilisateur->execute();
            $select_personnel->execute();
            $select_organisateur->execute();

            $utilisateur = $select_utilisateur->fetchAll();
            $personnel = $select_personnel->fetchAll();
            $organisateur = $select_organisateur->fetchAll();
            
            //Compter le nombre d'occurence
            $nb_utilisateur = Count($utilisateur);
            $nb_personnel = Count($personnel);
            $nb_organisateur = Count($organisateur);

            //Rediriger vers la page utilisateur
            if($nb_utilisateur && $nb_personnel == 0 &&  $nb_organisateur == 0){
                $_SESSION['nom'] = $utilisateur[0]['nom_utilisateur'];
                 header('Location: http://localhost/g_sport_zone/accueil.php');
            }

            //Rediriger vers la page personnel
            else if ($nb_personnel && $nb_utilisateur == 0 && $nb_organisateur == 0){
                $_SESSION['nom'] = $personnel[0]['nom_personnel'];
                header('Location: http://localhost/g_sport_zone/accueil.php');
            }

            //Rediriger vers la page organisateur
            else if ($nb_organisateur && $nb_utilisateur == 0 && $nb_personnel == 0){
                $_SESSION['nom'] = $organisateur[0]['nom_organisateur'];
                header('Location: http://localhost/g_sport_zone/accueil_org.php');
            }
            
            //Rediriger vers l'accueil
            else{
                header('Location: http://localhost/g_sport_zone/user/index.php'); 
            }
        }
    } catch (PDOException $e){
        echo 'echec:'.$e->getMessage();
    }