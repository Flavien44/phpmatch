<!DOCTYPE html>
<html lang="fr">
<!--la langue ! -->

<head>

           <meta charset="utf-8"/>
           <link rel="stylesheet" style="text/css" href="style.css"/> <!--link css-->
             <title>Match</title>
</head>

<body>
    <img class="img"src="img/nantes.jpg"/>
    <img class="img2"src="img/paris.png"/>
    <h1>Interface Gestion Match !</h1>
<?php
require_once("match.php"); //mon inclusion classe match
    $match1 = new Match("le 'FC Nantes'", " le 'PSG Football Club'","3/0"," le 21/04/2017.");
    $match2 = new Match("le 'FC lyon'", " le 'caen'","3/0"," le 21/04/2017.");   //ma nouvelle class

     echo $match2->toString();        //methode tostring pour voir mes 3 variables !!
?>
</body>
</html>
