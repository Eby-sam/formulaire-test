let home = document.getElementById('home');
let dem = document.getElementById('demande');
let gal = document.getElementById('gal');

function clickHome () {
    window.location ="/../../index.php";
}

function clickGalerie () {

}

function clickDemande () {

}

home.addEventListener('click', clickHome);
gal.addEventListener('click', clickGalerie);
dem.addEventListener('click', clickDemande);


        // -------- Formulaire ----------//

let name = document.querySelector('#user');
let age = document.querySelector('#age')
const submit = document.querySelector('#id-submit');

function verifName() {
    if (name.value === "" || age.value === "") {
        window.location = "/../../index.php"
        alert("L'un des champs est vide !");
    }
    else if (name.value.length <= 2 || name.value.length >= 25) {
        alert("Votre nom dois être compris entre 2 et 25 caractères !");
    }

    else if (age.value <= 18 || age.value >= 90) {
        alert("vous n'avez pas l'age requis!");
    }
    else {
        alert("Votre nom est correct !");
        window.location = "/../../index.php"
    }
}

submit.addEventListener('click', function (event) {
    verifName();
})