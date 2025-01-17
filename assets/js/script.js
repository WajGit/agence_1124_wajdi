if(document.querySelector(".ajoutLogement")){
    verifFormLogement();
}
window.setTimeout(cacheMessage, 2000);
confirmDelete()


/***************************************/
/***  Fonction des formulaires    ******/
/***************************************/

function resultValidInput(boolean){
    if(boolean){
        return "<span class='succesInput'><i class='fa-solid fa-check'></i></span>";
    }
    else{
        return "<span class='dangerInput'><i class='fa-solid fa-xmark'></i></span>";
    }
}

/***************************************/
/*******      formLogement    **********/
/***************************************/

function verifFormLogement(){
    let inputTitre = document.querySelector("input[name='titre']");
    let inputAdresse = document.querySelector("input[name='adresse']");
    let inputVille = document.querySelector("input[name='ville']");
    let inputCp = document.querySelector("input[name='cp']");
    let inputSurface = document.querySelector("input[name='surface']");
    let inputPrix = document.querySelector("input[name='prix']");
    let inputType = document.querySelector("#typeLogement");
    let erreurForm = document.querySelector("span[name='ajouterLogement']");
    inputTitre.addEventListener("keyup", function () {
        document.querySelector("span[name='titre']").innerHTML = resultValidInput(checkTitre(inputTitre.value));
    });
    inputAdresse.addEventListener("keyup", function () {
        document.querySelector("span[name='adresse']").innerHTML = resultValidInput(checkAdresse(inputAdresse.value));
    });
    inputVille.addEventListener("keyup", function () {
        document.querySelector("span[name='ville']").innerHTML = resultValidInput(checkNom(inputVille.value));
    });
    inputCp.addEventListener("keyup", function () {
        document.querySelector("span[name='cp']").innerHTML = resultValidInput(checkCp(inputCp.value));
    });
    inputSurface.addEventListener("keyup", function () {
        document.querySelector("span[name='surface']").innerHTML = resultValidInput(checkInt(inputSurface.value));
    });
    inputPrix.addEventListener("keyup", function () {
        document.querySelector("span[name='prix']").innerHTML = resultValidInput(checkInt(inputPrix.value));
    });
    inputType.addEventListener("change", function () {
        console.log(inputType.value);
        document.querySelector("span[name='type']").innerHTML = resultValidInput(checkNom(inputType.value));
    });
    document.querySelector("button[name='genereLogement']").addEventListener("click", (event) => {
        event.preventDefault();
        genereLogement();
    });
    document.querySelector(".ajoutLogement").addEventListener("submit", (event) => {
        if(!(checkTitre(inputTitre.value) &&
        checkAdresse(inputAdresse.value) &&
        checkNom(inputVille.value) &&
        checkCp(inputCp.value) &&
        checkInt(inputSurface.value) &&
        checkInt(inputPrix.value) &&
        checkNom(inputType.value)))
        {
            event.preventDefault();
            erreurForm.innerHTML = "Veuillez remplir tous les champs";
        }
    });
}

function confirmDelete(){
    if(document.querySelector(".boutonDelete")){
        let bouton = document.querySelector(".boutonDelete");
        let message;
        bouton.addEventListener("click", (event) => {
            message = "Voulez vous vraiment supprimer " + document.querySelector("input[name='titre']").value + " ?";
            if(!window.confirm(message )){
                event.preventDefault();
            }
        });
    }
}


function genereLogement(){
    let types = ["La maison de", "Appartement de","La villa de","Le domaine de", "Le manoir" ,"Le château de"]
    let prenoms = ["Sofiane",  "Fabien", "Yoann", "Moussa", "Jerome", "Emeline", "Edouard", "Johanna", "Sarah", "Stephane", "Tony", "Dylan", "Coralie", "Berengere", "Wajdi"];
    let type = types[Math.floor(Math.random() * types.length)];
    let prenom = prenoms[Math.floor(Math.random() * prenoms.length)];
    let voies = ["chemin", "rue" , "impasse", "place" , "route", "boulevard", "avenue"];
    let nomVoies = ["des lilas", "des platanes", "des tilleules", "des roses", "des marguerites", "des cerisiers", "des vignes", "des cocotiers", "des palmiers", ]
    let adresse = (Math.floor(Math.random() * 50)) + " " + voies[Math.floor(Math.random() * voies.length)] + " " + nomVoies[Math.floor(Math.random() * nomVoies.length)];
    let villes = ["Lille", "Lens", "Paris", "Marseille", "Lyon", "Bordeaux", "Toulouse", "Rennes", "Caen", "Rouen", "Strasbourg"]
    document.querySelector("input[name='titre']").value = type + " " + prenom;
    document.querySelector("input[name='adresse']").value = adresse;
    document.querySelector("input[name='ville']").value = villes[Math.floor(Math.random() * villes.length)];
    document.querySelector("input[name='cp']").value = Math.floor(Math.random() * 100000) ;
    document.querySelector("input[name='surface']").value = Math.floor(Math.random() * (999-70));
    document.querySelector("input[name='prix']").value = Math.floor(Math.random() * 1000000);
}


/***************************************/
/*******Expressions Regulieres**********/
/***************************************/
function checkTitre(titre) {
    let regExp = "^[A-zÀ-ú][A-zà-ú ]*$"
    let bool = RegExp(regExp).test(titre)
    return bool
}
function checkAdresse(titre) {
    let regExp = "^[A-zÀ-ú0-9]{0,2}[A-zà-ú ]*$"
    let bool = RegExp(regExp).test(titre)
    return bool
}
function checkNom(nom) {
    let regExp = "^[A-zÀ-ú][a-zà-ú]*$"
    let bool = RegExp(regExp).test(nom)
    return bool
}
function checkCp(cp) {
    let regExp = "^[0-9]{5}$"
    let bool = RegExp(regExp).test(cp)
    return bool
}
function checkInt(cp) {
    let regExp = "^[0-9]*$"
    let bool = RegExp(regExp).test(cp)
    return bool
}

/***************************************/
/*******       Message        **********/
/***************************************/
function cacheMessage(){
    if(document.querySelector(".succes")){
        document.querySelector(".succes").style.display = "none";
    }
    else if (document.querySelector(".attention")){
        document.querySelector(".attention").style.display = "none";
    } 
}
