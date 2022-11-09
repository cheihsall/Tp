<?php
   include("MaBase.php");
ini_set("display_errors", "1");
error_reporting(E_ALL);
    
    @$prenom = $_POST["prenom"];
    @$nom = $_POST["nom"];
    @$email = $_POST["email"];
    @$role = $_POST["role"];
    @$mdp = md5($_POST["password"]);
    @$cmdp = $_POST["password1"];
    @$photo = file_get_contents($_FILES['photo']['tmp_name']); 
    @$submit = $_POST["submit"];
    if(isset($submit)){
          

               
                  
                
                      
         if(isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["email"]) && !empty($_POST["email"]) && 
            isset($_POST["role"]) && !empty($_POST["role"]) && isset($_POST["password"]) && !empty($_POST["password"]) && isset($_POST["password1"]) && !empty($_POST["password1"])){
           
            $recup = $pdo->prepare(" SELECT * FROM utilisateurs WHERE email = '".$email."'"); 
           $recup->execute();
           $res = $recup->fetchAll(PDO::FETCH_ASSOC); 
            if(count($res) == 0){ 
               // if(trim($mdp) === trim($cmdp)){
            //        
                
                

                $recup = $pdo->prepare(" INSERT INTO utilisateurs(Nom,Prenom,Email,Roles,MotDePasse,Photo) VALUES (?, ?, ?, ?, ?, ?) "); 

                $recup->bindValue(1, $nom);
                $recup->bindValue(2, $prenom);
               
                $recup->bindValue(3, $email);
                $recup->bindValue(4, $role);
                $recup->bindValue(5, $mdp);
                /* $recup->bindValue(5, password_hash($mdp, PASSWORD_BCRYPT)); */
                
                $recup->bindValue(6, $photo);
                $recup->execute();
    
                echo "Inscription réussie";
                $sql = "SELECT id FROM utilisateurs WHERE Email = '".$email."'";
                $id = $pdo->prepare($sql);
                $id->execute();
                $row = $id->fetch(PDO::FETCH_ASSOC);
                //on modifie le matricule
                $matricule = 'SN_'.date('Y-', time()).$row['id'].'-NMA';
                //on modifie la derniere matricule du BD
                $sql2 = "UPDATE utilisateurs SET  Matricule = '$matricule' WHERE Email = '".$email."'";
                $matricule2 = $pdo->prepare($sql2);
                $matricule2->execute();
                /* $message3.="<label>Votre matricule est: '".$matricule."'</label>"; */
                 }else
                 header("location:../views/tp.php?existe");
                }}
                
                
           
           
           
       
    



?>