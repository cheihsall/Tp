<?php
include('../controllers/fonction.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <title>Document</title>
</head>

<body class="d-flex justify-content-center">
  <div style="background-image: url('bg1.gif');background-repeat:no-repeat;  background-size:1900px 950px; height: 950px; width: 1900px;" class="d-flex align-items-center">
    <div class="container border shadow p-3 rounded-3 col-md-5 " style="background-color: #ffffff;">
      <form class="row g-5" id="formul" method="POST" action="../modeles/INSERE.php" enctype="multipart/form-data">
        <div class="d-flex justify-content-center">
          <p class="fs-2">
          <h2>Inscription</h2>
          </p>
          <p id="message"></p>
        </div>
        
        <div class="text-danger d-flex justify-content-center "> <?php if (isset($_GET['existe'])) {
                                                                    echo "Cet Email a deja un compte";
                                                                  }
                                                                  if (isset($_GET['existe1'])) {
                                                                    echo "Cet Email a deja un compte,mais innaccessible: contacter votre administrateur";
                                                                  } ?> </div>

        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nom<span id="et">*</span></label>
          <input type="texte" name="nom" class="form-control" id="nom">
          <span id="erreur"></span>
          <span id="ok"></span>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Prenom<span id="et1">*</span></label>
          <input type="texte" name="prenom" class="form-control" id="prenom">
          <span id="erreur1"></span>
          <span id="ok"></span>
        </div>

        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email<span id="et2">*</span></label>
          <input type="mail" name="email" class="form-control" id="Email">
          <span id="erreur2"></span>
          <span id="erreur@"></span>
          <span id="ok"></span>

        </div>
        <div class="col-md-6">
          <label for="role" class="form-label">Role<span id="et3">*</span></label>


          <select class="form-select" name="role" id="role" aria-label="Default select example">
            <option selected></option>
            <option value="1">User</option>
            <option value="2">Administrateur</option>

          </select>
          <span id="erreurx"></span>
        </div>
        <div class="col-md-6">
          <label for="Password" class="form-label">Mot de passe<span id="et4">*</span></label>
          <input type="password" name="password" class="form-control" id="Password">
          <span id="erreur3"></span>
          <span id="ok"></span>
        </div>
        <div class="col-md-6">
          <label for="Password" class="form-label">Mot de passe<span id="et5">*</span></label>
          <input type="password" name="password1" oncopy="return false" onpaste="return false" oncut="return false" class="form-control" id="Password1">
          <span id="erreur4"></span>
          <span id="ok"></span>
        </div>


        <div class="col-md-6">
          <label for="inputState" class="form-label">photo</label>
          <input type="file" accept="image/png, image/jpeg" or accept=".png, .jpg, .jpeg" name="photo" class="form-control" id="file">
          <span id="erreur5"></span>
          <span id="ok"></span>
        </div>


        <div class="col-10 ">
          <button type="submit" class="btn btn-primary col-7" id="submit" name="submit">Inscription</button>

        </div>
        <div class="col-md-8 d-flex justify-content-center align-self-end position-relative top-0 start-50">

          <a href="pageConnexion.php" class="text-right text-primary" style="color:#8EE3FF;">
            Se connecter </a>

        </div>
   <!--  </div><div class="position-absolute top-0 start-50"> /* Pop() *//* include('modif.php'); */ ?></div> -->
  <?  if (isset($_GET['pop']))
 ?>
  <span id="success"><? $_GET['pop']?></span>
    <button type="button" class="btn btn-primary" name="pop" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  id="popup" >
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel" class="text-center">Inscription reussie avec succés </h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <h5 class="d-flex justify-content-center"> voulez vous etre rediriger dans votre page <br>
       connexion </h5>
      <div class=" d-flex"> <br>
                <button type="button" data-bs-dismiss="modal" class="  form-control align-self-end position-relative  start-0" style="margin-left:10px;" name="">NON</button>
            
                <button type="button" class="form-control align-self-end position-relative  start-25 " style="background-color:green; color:white; margin-left:150px; "name="submit"> <a href="pageConnexion.php" style="text-decoration: none; "> OUI</a></button>
            </div>  
      
      </div>
      
    </div>
  </div>
</div>
    </form>

  </div>

  </div>
  
  <script src="veriff.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
</body>

</html>