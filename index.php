<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
    <title> Camille Moretti - Portfolio </title>
</head>
<body>
  
    <?php
    /* 
        Recover the data on CONTROLLER for to be used for the VIEW
    */ 

    //routage
    // ?page=presentation

    /*if($_GET['page'] == 'presentation')
    {
        require_once 'controller/presentationController.php';
    }
    else
    {

    }*/

    //On affiche tous les bouts de pages
    // $header = new Header();
    //$header->display();


    require_once 'controller/headerController.php'; 
    require_once 'controller/presentationController.php';
    require_once 'controller/studyController.php';
    require_once 'controller/projectController.php';
    require_once 'controller/contactController.php';
    ?> 






</body>
</html>