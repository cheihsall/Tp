<?php

try{ 
/*LIAISON AVEC LE FORMULAIRE A LA BASE DE DONNEE*/
$pdo = new PDO('mysql:host=localhost;dbname=MaBase','UBUNTU','mamy');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$contenu = '';
}
catch(PDOException $pdo){echo "erreur : " .$pdo->getMessage();
}




?>



