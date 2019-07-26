<?php

function displaypresentation()
{
    //connexion
    $dsn = 'mysql:host=localhost;dbname=portfolio';
    $login = 'root';
    $password = '';
    // ouverture de connexion 
    $pdo = new PDO($dsn, $login, $password);
    // paramétrage de la liaison PHP mysql les données sont encodées en UTF8
    $pdo->exec('SET NAMES UTF8');
    // Afficher les erreurs SQL
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $sql = "SELECT * FROM presentation";
    $result = $pdo->query($sql);
    $presentation= $result->fetchAll(PDO::FETCH_ASSOC);
    return $presentation;
}

/*REECODE LE EN OBJET

class Presentation
{
    function getAll()
    {
        //conexion bdd
        //requete
        $tableauDeDonnees = [['id' => 10,'title' => 'titlezf,nzeolrhfniuerh'],['id' => 11,'title' => 'titkihufizuhfuerh']];

        return $tableauDeDonnees;
    }
}*/
