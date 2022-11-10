let formulaire = document.getElementById("formul");
let prenom = document.getElementById("prenom")
  let nom = document.getElementById("nom")
  let email = document.getElementById("Email")
  let pwd = document.getElementById("Password")
  let pwd1 = document.getElementById("Password1")
  let masque = document.getElementById("submit")
  let role = document.getElementById("role")
et.style.color = 'red'
  nom.addEventListener('keyup',function(e){
    let erreur = document.getElementById("erreur");
    let et = document.getElementById("et");
    
    if (nom.value.trim() =='')  {
        
        erreur.innerHTML = 'champ vide!';
        erreur.style.color = 'red';
        et.style.color = 'red'
        nom.style.borderColor = "red";
       return;
      }
      et.style.color = 'green'
      erreur.innerHTML = '';
      erreur.style.color = 'green';
      nom.style.borderColor = "#008a00";
  })

  et1.style.color = 'red'
  prenom.addEventListener('keyup',function(e){
    let erreur1 = document.getElementById("erreur1");
    let et1 = document.getElementById("et1");
    if (prenom.value.trim() =='')  {
        
        erreur1.innerHTML = 'champ vide!';
        erreur1.style.color = 'red';
        et1.style.color = 'red'
        prenom.style.borderColor = "red";
       return;
      }
      et1.style.color = 'green'
      erreur1.innerHTML = '';
      erreur1.style.color = 'green';
      prenom.style.borderColor = "#008a00";
  })
  et2.style.color = 'red'
 


  function checkEmail(email) {
    //var re = /^(([^<>()[\]\\.ù*$&é'-_çà^?,;:\s@\"]+(\.[^<>()[\]\\.ù*$&é'-_çà^?,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   var re = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
   //var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //var re = /((?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\]))$/;
    return re.test(email); 
}
email.addEventListener('keyup', function validate() {
    var email = document.getElementById("Email").value;
    let erreur2 = document.getElementById("erreur2");
    

    if (checkEmail(email)) {
      erreur2.innerHTML = '';
    erreur2.style.color = 'green';
    et2.style.color = 'green'
    return; 
    } 
      erreur2.innerHTML = 'Adresse e-mail non valide!';
    erreur2.style.color = 'red';

        
    
}                                            

 /*  erreur2.innerHTML = 'cool!';
  erreur2.style.color = 'green';
  email.style.borderColor = "#008a00";
} */)











  et3.style.color = 'red'
  role.addEventListener('change',function(e){
    let erreurx = document.getElementById("erreurx");
    let et3 = document.getElementById("et3");
    if (role.value.trim() =='')  {
        
        erreurx.innerHTML = 'champ vide!';
        erreurx.style.color = 'red';
        et3.style.color = 'red'
        role.style.borderColor = "red";
       return;
      }
      et3.style.color = 'green'
      erreurx.innerHTML = '';
      erreurx.style.color = 'green';
      role.style.borderColor = "#008a00";
  })


  et4.style.color = 'red'
  pwd.addEventListener('keyup',function(e){
    let erreur3 = document.getElementById("erreur3");
    let et4 = document.getElementById("et4");
    if (pwd.value.trim() =='')  {
        
        erreur3.innerHTML = 'champ vide!';
        erreur3.style.color = 'red';
        et4.style.color = 'red'
        pwd.style.borderColor = "red";
       return;
      }
 et4.style.color = 'green'
      erreur3.innerHTML = '';
      erreur3.style.color = 'green';
      pwd.style.borderColor = "#008a00";
  })
  et5.style.color = 'red'
  pwd1.addEventListener('keyup',function(e){
    let erreur4 = document.getElementById("erreur4");
    let et5 = document.getElementById("et5");
    if (pwd1.value.trim() =='')  {
        
        erreur4.innerHTML = 'champ vide!';
        erreur4.style.color = 'red';
        et5.style.color = 'red'
        pwd1.style.borderColor = "red";
       return;
      }
      et5.style.color = 'green'
      
  })

  pwd1.addEventListener('keyup',function(e){
    let erreur4 = document.getElementById("erreur4");
    
    if (pwd1.value.trim() !== pwd.value.trim())  {
        
        erreur4.innerHTML = 'les mots de passe ne sont pas identique!';
        erreur4.style.color = 'red';
        
        pwd1.style.borderColor = "red";
       return;
      }

      erreur4.innerHTML = '';
      erreur4.style.color = 'green';
      pwd1.style.borderColor = "#008a00";
  })

  

masque.addEventListener('mouseover',function(){

    if (nom.value.trim() =='' || erreur2.style.color == 'red'|| prenom.value.trim() ==''|| email.value.trim() ==''|| pwd.value.trim() ==''|| pwd1.value.trim() =='' ||role.value.trim() =='') {
      document.getElementById("submit").disabled = true;
      masque.style.backgroundColor="#747474";
     /* masque.style.display="none";*/
  setTimeout(() => {
    /*masque.style.display = "block";*/
    document.getElementById("submit").disabled = false;
    masque.style.backgroundColor="#0459D9";
  }, 5000);
    }
    
  
  
  })

  const success = document.getElementById('success');
const bouttonModal = document.getElementById('popup');
bouttonModal.style.display = 'none';
if (success) {
    bouttonModal.click();
}
  