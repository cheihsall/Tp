<?php

   include("MaBase.php");
if(isset($_GET['modifid'])){
  // var_dump($_GET['updateid']);
  //  exit;   
    $ID =$_GET['modifid'];
    $stmt=$pdo->prepare("SELECT * FROM utilisateurs where id=$ID");

    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $check=$stmt->fetchAll()[0];
    }
     
if(isset($_POST['nom'],$_POST['prenom'],$_POST['email'])){


	$nom=$_POST['nom'];	
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];			
  
    $ID=$_GET['modifid'];	
    $datemodif=date('y-m-d h:i:s');
 
    $stmtAjoutPersonne=$pdo->prepare("UPDATE utilisateurs SET Nom='$nom',Prenom='$prenom',Email='$email', DateModif='$datemodif' WHERE id=$ID");
    $stmtAjoutPersonne->execute();
    if($stmtAjoutPersonne){
        header('location:../views/admin.php?');
    }else { die('Erreur : '.$e->getMessage());}
   
}

}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="laReussite.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>modification</title>
  </head>
  <body style="background-color:azure;">

 <div class="container" style="width:400px; height: 900px;margin-top:100px;">
 <form action="" method="post" class="row g-2 mt-6" style="background-color:azure;border: solid 1px; border-radius: 10px; " id="loginform" >
      <div>
        <h2 class="text-center">FORMULAIRE DE MODIFICATION</h2>
      </div>
      <div>
<div><p><?= $success ?? null  ?> </p> </div>
<div><p><?= $erreur ?? null  ?> </p> </div>
      </div>
      <div class="col-md-12">
        <label for="inputEmail4" class="form-label">Prenom (*)</label>
        <input type="text" class="form-control" id="prenom" style="border: solid 1px; border-radius: 5px; " name="prenom" value="<?= $check["Prenom"] ?? null  ?>" placeholder="PRENOM">
        <p id="erreurprenom"></p>

      </div>

      <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Nom (*)</label>
        <input type="text" class="form-control" id="nom" name="nom" style="border: solid 1px; border-radius: 5px; "value="<?= $check["Nom"] ?? null  ?>" placeholder="NOM">
        <p id="erreurNom"></p>

      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Email (*)</label>
        <input type="text" autocomplete="off" class="form-control" id="email"style="border: solid 1px; border-radius: 5px; " value="<?= $check["Email"] ?? null  ?>" placeholder="Email" name="email">
        <p id="erreuremail"></p>

      </div>
      <br>
   <!--    <div class="col-6">
        <input type="submit" id="submit" name="submit"  class="btn btn-primary" style="background-color:#05006B">
      </div> -->
      <div class="col-4">
                <button  class="  form-control" style="margin-left:10px;" name=""><span class="text-danger">X </span>Annuler</button>
            </div> 

            <div class="col-4">
                <button type="submit" class="form-control align-self-end position-relative  start-100 mb-3" style="background-color:green; color:white; margin-left:0px; "name="submit">  Modifier</button>
            </div> 
            
      <script src=""></script>
    </form>
    </div>


 
  </body>
</html>