<?php
include_once "../controllers/f2.php";
init_php_session();
include("MaBase.php");
include('../controllers/fonction.php');

if (UserEstConnecte()) {
    header("location:../views/admin.php");
}


if (AdminEstConnecte()) {
    header("location:../views/admin.php");
} else {



    if (isset($_POST['email'], $_POST['password'])) {

        $email = trim($_POST['email']);
        $mdp = md5($_POST["password"]);

        try {
            $sth = $pdo->prepare(" SELECT * FROM utilisateurs WHERE email = '" . $email . "' AND MotDePasse = '" . $mdp . "'");
            $sth->execute();
            $res = $sth->fetchAll(PDO::FETCH_ASSOC);
            if (count($res) == 0) {
                $message = "Compte introuvable, inscrivez-vous";
                header("location:../views/pageConnexion.php?erreur");
            } else {

                $ins = $pdo->prepare("SELECT id,Roles,Nom,Prenom,Matricule,Photo,Etat  FROM utilisateurs WHERE email = '" . $email . "' AND MotDePasse = '" . $mdp . "'");
                $ins->execute();
                $row = $ins->fetch(PDO::FETCH_ASSOC);
                $role = $row['Roles'];
                $etat = $row['Etat'];
                /* if ($etat!=='1'){   
 
         header("location:../views/pageConnexion.php?erreur2");
         
     } else{ */
                /* echo "haut";
        exit;  */

                if ($role == 'User' && $etat == '0') {
                    /* echo "entré1";
        exit; */
                    $_SESSION['Prenom'] = $row['Prenom'];
                    $_SESSION['Nom'] = $row['Nom'];
                    $_SESSION['Matricule'] = $row['Matricule'];
                    $_SESSION['Photo'] = $row['Photo'];
                    $_SESSION['coonect'] = $row['id'];
                    $_SESSION['User'] = 'OUI';
                    $Prenom = $_SESSION['Prenom'];
                    $Nom = $_SESSION['Nom'];
                   
                    $Matricule = $_SESSION['Matricule'];
                    /* echo"$Matricule"; */
                    header("location:../views/admin.php");
                }


                else if ($role == 'Administrateur' && $etat == '0') {
                    /* echo "entré2";
            exit; */
                    $_SESSION['Prenom'] = $row['Prenom'];
                    $_SESSION['Nom'] = $row['Nom'];
                    $_SESSION['Matricule'] = $row['Matricule'];
                    $_SESSION['Photo'] = $row['Photo'];
                    $_SESSION['coonect'] = $row['id'];

                    $_SESSION['Administrateur'] = 'OUI';
                    /* $Prenom=$_SESSION['Prenom'];
            $Nom=$_SESSION['Nom'];
            $Matricule=$_SESSION['Matricule']; */
                    /* echo"$Matricule"; */
                    header("location:../views/admin.php");
                } else {
                    header("location:../views/pageConnexion.php?erreur2");
                }
                /* else if($profession=='admin'){
            
            header("location:profil/prof_membre.php");
        } */
                /* } */
            }
        } catch (PDOException $e) {
            echo ("Erreur:" . $e->getMessage());
        }
    } else {
        echo "desole mon gars";
    }
}

?>

<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inclusion/CSS/connexion.css">
   
    <title>Document</title>
</head>
<body class="general" >
 
 
<header>
        <div class="header">
            <nav>
                <ul class="menu">
                    <img src="inclusion/REUSSITE.jpg" alt="image simplon" class="z">
                    <li class="li"><a href="">Contact</a></li>
                   
                    <li class="li" ><a href="page_accueuil.php" class="active">Accueil</a></li>
                    
                </ul>
            </nav>
        </div>
        
    </header>
    <main>
    
        <div class="description">
            
            <h1>CONNEXION EMPLOYÉ</h1><br>
            
            </div>
            <div class="container">
    <form method="POST" action=""  >
       
        
        <label for="pseudo ">Email</label> <br>
        <input type="text" name="email" id="email" required placeholder="saisir votre mail" class="case"><br><br>
        <label for="nom ">Mot de pass</label><br>
        <input type="password" name="passeword" id="pass" required placeholder="Mot de pass" class="case"><br><br>
        <label for="nom ">profession</label><br>
        <input type="text" name="profession" id="prof" required placeholder="profession" class="case"><br><br>
        <button type="submit" id="envoyer" onclick="afficher()" class="btn" >CONNEXION</button><br>
        <span</span><p><a href="inscrip_employes.php" class="inscrip">Inscription?</a></p>
   
    </form> 
    
 </div>
 

 
<script>function afficher(){
    /*        Récupération des données         */
    
   
    if(document.getElementById('email').value == "") {
      alert("Veuillez entrer votre email!");
      document.getElementById('email').focus();
      return false; }

     

     

    if(document.getElementById('email').value.indexOf('@') == -1) {
      alert("@ est obligatoire pour une adresse électronique!");
      document.getElementById('email').focus();
      return false;
    }

    if(document.getElementById('email').value.indexOf('.') == -1) {
      alert("un(.) est obligatoire pour une adresse électronique!");
      document.getElementById('email').focus();
      return false;
    }
   

   

                        if(document.getElementById('profession').value == "") {
                            alert("Veuillez entrer votre profession!");
                            document.getElementById('profession').focus();
                            return false; }
                            if(document.getElementById('pass').value == "") {
                              alert("Veuillez entrer votre mot de pass!");
                              document.getElementById('pass').focus();
                              return false; }
    

   

      }</script> 
<footer><p>© Copyright Simplon. Designed and Developed by <strong>UBUNTU_GROUPE</strong></p></footer>

</main>


    </body>
</html>

 -->