<?php
   include("MaBase.php");
 
if (isset($_GET['changeid'])) {
    $ID=$_GET['changeid'];
    

    

    $ins=$pdo->prepare("SELECT Roles FROM utilisateurs WHERE id='$ID'");
    $ins->execute();
    $row=$ins->fetch(PDO::FETCH_ASSOC);
    $role=$row['Roles'];
   
if( $role== 'User'){
    $ins=$pdo->prepare("UPDATE utilisateurs SET Roles='Administrateur' WHERE id='$ID'");
    $ins->execute();
    if($ins){
      header("location:../views/admin.php?pagee");
    
    } }elseif($role== 'Administrateur') {
        $ins=$pdo->prepare("UPDATE utilisateurs SET Roles='User' WHERE id='$ID'");
        $ins->execute();
        if($ins){
         header("location:../views/admin.php?pagee");
          
         
        } }
}
?>