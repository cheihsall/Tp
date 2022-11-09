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
  <div style="  background-image: url('bg1.gif');background-repeat:no-repeat;  background-size:1900px 950px; height: 950px; width: 1900px;" class="d-flex align-items-center border border-1">
    <div class="container border rounded-3 col-md-4 shadow p-3 mb-5 " style="background-color: #8EE3FF;">
      <form class="row g-4 d-flex justify-content-center " method="POST" action="../modeles/connexion.php">

        <div class="d-flex justify-content-center">
          <p class="fs-2">connexion</p>

        </div>
        <span class="text-danger d-flex justify-content-center ">
          <?php if (isset($_GET['erreur'])) {
            echo "Compte introuvable, verifier vos identifiants";
          }
          if (isset($_GET['erreur2'])) {
            echo "vous n'etes pas autorisé a vous connecter";
          } ?></span>
        <div class="col-md-8 ">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control " id="Email">
          <span id="erreur2"></span>
          <span id="erreur@"></span>
          <span id="ok"></span>
        </div>


        <div class="col-md-8">
          <label class="form-label">Mot de passe</label>
          <input type="password" name="password" oncopy="return false" onpaste="return false" oncut="return false" class="form-control" id="Password">
          <span id="erreur3"></span>
          <span id="ok"></span>
        </div>




        <div class="col-md-8" style="background-color:#8EE3FF;">
          <button type="submit" class="btn btn-primary col-md-12 " id="submit">CONNEXION</button>

        </div>

        <div class="col-md-9 d-flex justify-content-end mt-3 mb-3">
          <a href="tp.php" class="">
            S'inscrire</a>

        </div>
    </div>
    </form>
  </div>
  </div>
  <script src="v.js"></script>
</body>

</html>