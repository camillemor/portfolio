<?php

function displaystudy()
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

    $sql = "SELECT * FROM study";
    $result = $pdo->query($sql);
    $studies= $result->fetchAll(PDO::FETCH_ASSOC);
    return $studies;
}

?>