<?php

include("MaBase.php");
if (isset($_GET['modifid'])) {
  // var_dump($_GET['updateid']);
  //  exit;   
  $ID = $_GET['modifid'];
  $stmt = $pdo->prepare("SELECT * FROM utilisateurs where id=$ID");

  $stmt->execute();
  if ($stmt->rowCount() > 0) {
    $check = $stmt->fetchAll()[0];
  }

  if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    $ID = $_GET['modifid'];
    $datemodif = date('y-m-d h:i:s');

    $stmtAjoutPersonne = $pdo->prepare("UPDATE utilisateurs SET Nom='$nom',Prenom='$prenom',Email='$email', DateModif='$datemodif' WHERE id=$ID");
    $stmtAjoutPersonne->execute();
    if ($stmtAjoutPersonne) {

      echo '<script>
                window.location.href =" ../views/admin.php"
        </script>';
    } else {
      die('Erreur : ' . $e->getMessage());
    }
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>modification</title>
</head>

<?php if (isset($_GET['modifid'])) { ?>
  <span id="succ"></span> <?php } ?>


<button type="button" class="btn btn-primary display-none" name="op" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="ppup">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <body style="background-color:azure;">


          <div class="modal-body">

            <form action="" method="post" class="row g-2 mt-6" style="background-color:azure;border: solid 1px; border-radius: 10px; " id="loginform">
              <div>
                <h2 class="text-center">FORMULAIRE DE MODIFICATION</h2>
              </div>
              <div>
                <div>
                  <p><?= $succss ?? null  ?> </p>
                </div>
                <div>
                  <p><?= $ereur ?? null  ?> </p>
                </div>
              </div>
              <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Prenom (*)</label>
                <input type="text" class="form-control" id="prenom" style="border: solid 1px; border-radius: 5px; " name="prenom" value="<?= $check["Prenom"] ?? null  ?>" placeholder="PRENOM">
                <span id="erreur1"></span>

              </div>

              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Nom (*)</label>
                <input type="text" class="form-control" id="nom" name="nom" style="border: solid 1px; border-radius: 5px; " value="<?= $check["Nom"] ?? null  ?>" placeholder="NOM">
                <span id="erreur"></span>

              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Email (*)</label>
                <input type="text" autocomplete="off" class="form-control" id="email" style="border: solid 1px; border-radius: 5px; " value="<?= $check["Email"] ?? null  ?>" placeholder="Email" name="email">
                <span id="erreur2"></span>
                     <span id="erreur@"></span>

              </div>
              <br>

              <div class=" d-flex"> <br>
                <button type="button" data-bs-dismiss="modal" class="  form-control align-self-end position-relative  start-0" style="margin-left:10px;" name="">Annuler</button>

                <button type="submit" class="form-control align-self-end position-relative  start-25 " id="submit" style="background-color:green; color:white; margin-left:150px; " name="submit"> Modifier</a></button>
             
              </div>

              
              <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" src="verifmodif.js"></script>
             
              <script>
                

const sucess = document.getElementById('succ');
                const bouttonModal = document.getElementById('ppup');
                bouttonModal.style.display = 'none';
                if (sucess) {
                  bouttonModal.click();
               
                }


                prenom.addEventListener('keyup', function (e) {
    let erreur1 = document.getElementById("erreur1");
    
    if (prenom.value.trim() == '') {

        erreur1.innerHTML = 'champ vide!';
        erreur1.style.color = 'red';
        
        prenom.style.borderColor = "red";
        return;
    }
    
    erreur1.innerHTML = '';
    erreur1.style.color = 'green';
    prenom.style.borderColor = "#008a00";
})
nom.addEventListener('keyup', function (e) {
    let erreur = document.getElementById("erreur");
    

    if (nom.value.trim() == '') {

        erreur.innerHTML = 'champ vide!';
        erreur.style.color = 'red';
        
        nom.style.borderColor = "red";
        return;
    }
   
    erreur.innerHTML = '';
    erreur.style.color = 'green';
    nom.style.borderColor = "#008a00";
})



email.addEventListener('keyup', function (e) {
    let erreur = document.getElementById("erreur2");
    

    if (nom.value.trim() == '') {

        erreur2.innerHTML = 'champ vide!';
        erreur2.style.color = 'red';
        
        email.style.borderColor = "red";
        return;
    }
   
    erreur2.innerHTML = '';
    erreur2.style.color = 'green';
    email.style.borderColor = "#008a00";
})




                let masque = document.getElementById("submit")
                masque.addEventListener('mouseover', function () {

if (nom.value.trim() == '' || erreur2.style.color == 'red' || prenom.value.trim() == '' || email.value.trim() == '') {
    document.getElementById("submit").disabled = true;
    masque.style.backgroundColor = "#747474";
    /* masque.style.display="none";*/
    setTimeout(() => {
        /*masque.style.display = "block";*/
        document.getElementById("submit").disabled = false;
        masque.style.backgroundColor = "#0459D9";
    }, 5000);
}



})

              </script> 
            </form>
          </div>

      </div>
      </body>
    </div>
  </div>
</div>


</html>