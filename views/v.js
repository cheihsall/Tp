

  let email = document.getElementById("Email")
  let pwd = document.getElementById("Password")
 let masque = document.getElementById("submit")


    
   
/*  email.addEventListener('keyup',function(e){
    let erreur2 = document.getElementById("erreur2");
   
    fu (email.value.trim() =='')  {
        
        erreur2.innerHTML = 'champ vide!';
        erreur2.style.color = 'red';
        
        email.style.borderColor = "red";
       return;
      }  */
     

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
          erreur2.innerHTML = 'Adresse e-mail valide!';
        erreur2.style.color = 'green';
        return; 
        } 
          erreur2.innerHTML = 'Adresse e-mail non valide!';
        erreur2.style.color = 'red';

            
        
    }                                            

     /*  erreur2.innerHTML = 'cool!';
      erreur2.style.color = 'green';
      email.style.borderColor = "#008a00";
  } */)


  


  
  pwd.addEventListener('keyup',function(e){
    let erreur3 = document.getElementById("erreur3");
    
    if (pwd.value.trim() =='')  {
        
        erreur3.innerHTML = 'champ vide!';
        erreur3.style.color = 'red';
       
        pwd.style.borderColor = "red";
       return;
      }
 
      erreur3.innerHTML = 'cool!';
      erreur3.style.color = 'green';
      pwd.style.borderColor = "#008a00";
  })
 
  



  

masque.addEventListener('mouseover',function(){

    if (email.value.trim() ==''||erreur2.style.color == 'red'|| pwd.value.trim() =='') {
      document.getElementById("submit").disabled = true;
      masque.style.backgroundColor="#747474";
     /* masque.style.display="none";*/
  setTimeout(() => {
    /*masque.style.display = "block";*/
    document.getElementById("submit").disabled = false;
    masque.style.backgroundColor="#0459D9";
  }, 2000);
    }
    
  
  
  })
  