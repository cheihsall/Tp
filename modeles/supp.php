<?php
   include("MaBase.php");
 
if (isset($_GET['archiverid'])) {
    $ID=$_GET['archiverid'];
    $dateAr=date('y-m-d h:i:s');
    $inns=$pdo->prepare("UPDATE utilisateurs SET Etat='1' , DateArchiv='$dateAr' WHERE id='$ID'");//code pour archiver en changeant la valeur 0 par 1
    $inns->execute();
    if($inns){
       header('location:../views/admin.php');
     
    }
}
?>