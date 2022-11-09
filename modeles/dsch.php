<?php
   include("MaBase.php");
 


if (isset($_GET['did'])) {
    $ID=$_GET['did'];
    $ins=$pdo->prepare("UPDATE utilisateurs SET Etat='0' WHERE id='$ID'");//code pour archiver en changeant la valeur 0 par 1
    $ins->execute();
    if($ins){
        header('location:../views/admin.php?lister');
     
    }
}
