<?php
session_start();

include('../controllers/fonction.php');
/* var_dump(AdminEstConnecte());
exit; */

if(AdminEstConnecte())
{
    
        
       
     $Prenom=$_SESSION['Prenom'];
     $Nom=$_SESSION['Nom'];
     $Matricule=$_SESSION['Matricule'];
     
     $Photo=base64_encode($_SESSION['Photo']);
     $LISTE1='<span name="lister" ><a href="admin.php?lister" style="text-decoration: none; color:white; ">Utilisateurs Inactifs</a></span>';
     $LISTE2='<span name="montrer" ><a href="admin.php?montrer" style="text-decoration: none;color:white; ">Utilisateurs Actifs</a></span>';
     
        }

 else if(UserEstConnecte())

 {
    
    $Prenom=$_SESSION['Prenom'];
    $Nom=$_SESSION['Nom'];
    $Matricule=$_SESSION['Matricule'];
   
   base64_encode($_SESSION['Photo']);
    $LISTE1="";
    $LISTE2="";
  
 
    }

else{
    header("location:pageConnexion.php");
 }
  
 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
     <body class="d-flex justify-content-center">
                <div class="d-flex justify-content-center" style="background-color: #ffffff; height: 890px; width:100%;" >
                     <div class="" style="background-color: #8EE3FF;height: 890px; width:100%;">
                            <div class="w-100 d-flex" style="background-color: #0459D9; height:150px ">
                                <div style="margin-left:50px">
                                     <img title="Photo profil" src="data:image/png;base64,<?=$Photo?> " style="margin-left:50px ;height:95px; width:95px; margin-top: 30px;"  class="rounded-circle border border-1 mt-8"  >
                                     <p title="Matricule" class="h5 text-white"><?=$Matricule?></p>
                                      
                                </div>
                                <div class="align-self-end">
                                     <p class="h2 text-white mb-5"><span ></span><?=$Prenom?> <?=$Nom?></p>

                                </div>



                                 <div class="align-self-end position-relative top-0 start-50 " style="margin-left:-50px; display:flex; gap:35px;">
                                     <span class="h6 text-white mb-0 "> <a class="text-reset" href="archer.php?arc='.$ID.'"> <?=$LISTE1?></a></span>
                                     <span class="h6 text-white mb-0"> <a class="text-reset" href="archer.php?arc='.$ID.'"> <?=$LISTE2?></a></span>
                                </div>

                                <div class="position-relative top-0 start-50"style="margin-left:150px" ><a class="text-reset" href="../modeles/deconnexion.php" > 
                                     <img src="image/disconnect.svg" class=" mt-5 " alt="..." style="margin-left:20px; height:50px; width:30px  ">
                                     <p class="h5 text-white "></a></p>
                                      
                                </div>
                            </div>


                           
                              
                             
                            
                
            

                              <div class="position-absolute top-0 start-25"> <?= Modif()/* include('modif.php'); */?></div>
                            <div class=" d-flex justify-content-center mb-3" style="margin-top:180px; margin-left:50px;margin-right:50px;">
                             <?= AFFICHEtab();?>
                            </div>
                     </div>
                </div>
                <div class="w-100 position-absolute bottom-0 d-flex justify-content-center align-items-center" style="background-color: black;color:white; height:60px ">
                <b>© Copyright Simplon. Designed and Developed by <strong>GENTIL Digit-ALL</strong></b>
                </div>
     </body>
</html>
