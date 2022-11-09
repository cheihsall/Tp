
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php
    
    include("../modeles/MaBase.php");
    $Action="Action";
   echo '<table  style="  width:100%;background:#ffffff;" class=" table-striped">  <tr width:100%;  style="background:#0459D9; color:white; ">';
           
  
  
if(isset($_GET['page']) && !empty($_GET['page'])){
  $currentPage = (int) strip_tags($_GET['page']);
}

else{
  $currentPage = 1;
}
    $ins=$pdo->prepare('SELECT Matricule,Nom,Prenom,Email,Roles FROM utilisateurs WHERE Etat=0 ');
    $ins->execute();


      $ins = $pdo->query("SELECT id,Nom,Prenom,Email,Roles,Matricule,Etat FROM utilisateurs WHERE Etat=0");

  for($i=1; $i < /* $ins->columnCount() */6; $i++)



  {
    $Nom_colonne = $ins->getColumnMeta($i);
    echo '<th>' .$Nom_colonne['name'].'</th>';
   
  }
echo '<th>' .$Action. '</th>';
  echo "</tr>";
   
  $sql = 'SELECT COUNT(*) AS Etat FROM `utilisateurs` where Etat=0 ;';

// On prépare la requête
$ins = $pdo->prepare($sql);

// On exécute
$ins->execute();


// On récupère le nombre d'articles
$row = $ins->fetch();



$nbArticles = (int) $row['Etat'];

// On détermine le nombre d'articles par page
$parPage = 10;

$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM `utilisateurs` WHERE Etat=0 ORDER BY `Prenom` DESC LIMIT :premier, :parpage ;';

// On prépare la requête
$ins = $pdo->prepare($sql);


$ins->bindValue(':premier', $premier, PDO::PARAM_INT);
$ins->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute



if(isset($_POST["verif"])){
  if(isset($_POST["classe"])){
      $classe = $_POST["classe"];
      if(!empty($classe)){                   
          
$list = "SELECT * FROM utilisateurs WHERE Etat=0 AND Nom LIKE '%$classe%' OR Prenom LIKE '%$classe%'  ";
$ins = $pdo->query($list);

$ins->execute();
while ($row = $ins->fetch(PDO::FETCH_ASSOC)/* $row = $ins->fetch(PDO::FETCH_ASSOC) */) {
  
  $ID=$row['id']; 
  $nom=$row['Nom'];
  $prenom=$row['Prenom'];
  $email=$row['Email'];
 
  $role=$row['Roles'];
  $matricule=$row['Matricule'];
/*  $modifier=$row['modifier']; */
  $etat=$row['Etat'];
  $action="Action";
  
 if($etat==0){
  
  
    echo '<tr>
     
    <td >'.$nom.'</td>
    <td >'.$prenom.'</td>
    <td >'.$email.'</td>
    <td>'.$role.'</td>
   
    <td>'.$matricule.'</td>
    
    
   
    
    <td>

    
    
    <span name="modifierr" style="text-decoration: none; "><a href="admin.php?modifid='.$ID.'" > <img  style="height:40px ;width:40px;"src="image/user.svg"></a></span>
    <span style="text-decoration: none; "><a href="../modeles/change1.php?changeid='.$ID.'" > <img style="height:40px ;width:40px;"  src="image/role.svg"></a></span>
    
    <span classe="b1"style=" text-decoration: none;" OnClick="return(confirm(\'voulez-vous vraiment Archiver cet employé?\'))";>
    <a href="../modeles/supp.php?archiverid='.$ID.'" > <img style="height:40px ;width:40px;" src="image/ar.svg"></a></span>
    </td>

  </tr>';


  }



  
}
}
 } }
 
 $ins->execute();
/* $articles = $ins->fetchAll(PDO::FETCH_ASSOC); */
if(empty($classe)){ 
    while ($row = $ins->fetch(PDO::FETCH_ASSOC)/* $row = $ins->fetch(PDO::FETCH_ASSOC) */) {
    
      $ID=$row['id']; 
      $nom=$row['Nom'];
      $prenom=$row['Prenom'];
      $email=$row['Email'];
     
      $role=$row['Roles'];
      $matricule=$row['Matricule'];
    /*  $modifier=$row['modifier']; */
      $etat=$row['Etat'];
      $action="Action";
      

     
        echo '<tr>
         
        <td >'.$nom.'</td>
        <td >'.$prenom.'</td>
        <td >'.$email.'</td>
        <td>'.$role.'</td>
       
        <td>'.$matricule.'</td>
        
        
       
        
        <td>
  
        
        
        <span name="modifierr" style="text-decoration: none; "><a href="admin.php?modifid='.$ID.'" > <img  style="height:40px ;width:40px;"src="image/user.svg"></a></span>
        <span style="text-decoration: none; "><a href="../modeles/change1.php?changeid='.$ID.'" > <img style="height:40px ;width:40px;"  src="image/role.svg"></a></span>
        
        <span classe="b1"style=" text-decoration: none;" OnClick="return(confirm(\'voulez-vous vraiment Archiver cet employé?\'))";>
        <a href="../modeles/supp.php?archiverid='.$ID.'" > <img style="height:40px ;width:40px;" src="image/ar.svg"></a></span>
        </td>
    
      </tr>';
    
  
      



      
    }
     } ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head> 


    <div style="display: flex; justify-content:right;margin-right:150px;height:100px; margin-top:-120px ; align-items:center;position:absolute ;" class="container-fluid">
<form action="" method="post" style="display: flex;gap:15px;">
    <input type="text" name="classe" placeholder="Entrer prenom eleve ou nom classe" class="form-control col-md-2" id="rech">
    <input type="submit" name="verif" value="RECHERCHER" class="btn btn-info" id="search">
    
  </form>
</div>




    <nav style="position:absolute ; margin-top:-100px;"  class="position-absolute top-100 start-25">
      <ul class="pagination">
      
   
          <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
          <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
              <a href="admin.php?page=<?= $currentPage - 1 ?>" class="page-link"><</a>
          </li>
          <?php for($page = 1; $page <= $pages; $page++): ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                  <a href="admin.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
              </li>
          <?php endfor ?>
            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
              <a href="admin.php?page=<?= $currentPage + 1 ?>" class="page-link">></a>
          </li>
      </ul>
  </nav>
  </html>
   
  