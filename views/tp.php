



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
    <p class="fs-2"><h2>Inscription</h2></p>
    <p id="message"></p> </div>
    <div class="text-danger d-flex justify-content-center " > <?php if(isset($_GET['existe'])){
  echo "Cet Email a deja un compte"; }
  if(isset($_GET['existe1'])){
    echo "Cet Email a deja un compte,mais innaccessible: contacter votre administrateur"; } ?> </div>
 
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
    <label for="inputEmail4" class="form-label">Email<span  id="et2">*</span></label>
    <input type="mail" name="email" class="form-control" id="Email">
    <span id="erreur2"></span>
    <span id="erreur@"></span>
    <span id="ok"></span>
    
  </div>
  <div class="col-md-6">
    <label for="role" class="form-label">Role<span  id="et3">*</span></label>
    
  
  <select class="form-select" name="role" id="role" aria-label="Default select example">
  <option selected></option>
  <option value="1">User</option>
  <option value="2">Administrateur</option>
  
</select>
<span id="erreurx"></span></div>
  <div class="col-md-6">
    <label for="Password" class="form-label">Mot de passe<span id="et4">*</span></label>
    <input type="password" name="password" class="form-control" id="Password">
    <span id="erreur3"></span>
    <span id="ok"></span>
  </div>
  <div class="col-md-6">
    <label for="Password" class="form-label">Mot de passe<span  id="et5">*</span></label>
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
    <button type="submit"  class="btn btn-primary col-7" id="submit" name="submit">Inscription</button>
 
    </div>
    <div class="col-md-8 d-flex justify-content-center align-self-end position-relative top-0 start-50">
    
    <a href="pageConnexion.php" class="text-right text-primary" style="color:#8EE3FF;">
    Se connecter </a>
    
  </div>
</div>
</form>

</div>

</div>

<script src="veriff.js"></script> 

</body>
</html>
