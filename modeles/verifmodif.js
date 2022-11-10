
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