<?php
    // !!!!! PAS OUBLIER DE CREER LA DB examlpr 
    // !!!!! PAS OUBLIER DE CREER LA DB examlpr 
    // !!!!! PAS OUBLIER DE CREER LA DB examlpr
    
    // CREATE DATABASE examlpr;


    if(!isset($_POST["firstname"]) || !isset($_POST["lastname"]) || !isset($_POST["email"]) ||!isset($_POST["phone"]) || !isset($_POST["msg"]))
    {
        Header("Location: /?noti=Veuillez remplir tout les champs requis.");
        return;
    }

    if($_POST["firstname"] == "" || $_POST["lastname"] == "" || $_POST["email"] == "" || $_POST["phone"] == "" || $_POST["msg"] == "")
    {
        Header("Location: /?noti=Veuillez remplir tout les champs requis.");
        return;
    }

    $db = new PDO('mysql:host=localhost;dbname=examlpr', 'root','root');
    $db->exec('SET NAMES "UTF8"');

    
    try{ 
        $db->prepare('CREATE TABLE IF NOT EXISTS answers (answerid INT AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(64) DEFAULT NULL, lastname VARCHAR(64) DEFAULT NULL, email VARCHAR(128) DEFAULT NULL, phone VARCHAR(32) DEFAULT NULL, msg VARCHAR(512) DEFAULT NULL);')->execute();

        $db->prepare(
            'INSERT INTO answers(firstname, lastname, email, phone, msg) VALUES(?,?,?,?,?)'
        )->execute([$_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["phone"], $_POST["msg"]]);
    } 
    catch(PDOException $exception){ 
        echo $exception; 
    } 
    

    Header("Location: /?noti=Formulaire bien envoyé.");


    $db = null;
?>