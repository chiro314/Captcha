$("#bt-menu-accueil").prop('disabled', false);
$("#bt-menu-bio").prop('disabled', false);
$("#bt-menu-contact").prop('disabled', true);






/*
const PPT = 3, CIVILITE = 2, NOM = 1, PRENOM = 0;

//const divMessage = document.getElementById('div-message');
const divMessage = $("#div-message");

function test(id){
    var bouton = document.getElementById(id);
    bouton.value = true;
    alert (bouton.value);
}

function validerForm(formId){

    let message = testerStrs();

    if(message == "ok") $("#"+formId).submit(); //Envoyer le formulaire
    else {
        divMessage.html("");
        divMessage.text(message);
    }
}
function testerStrs(){

//https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Regular_Expressions 

    //Contrôles de chaque zone de saisie :     //Cibler "str0 1 2" :
   
    var re1 = /[^ '\-A-Za-z]/;
    var re2 = /\'{2,}|\-{2,}|\ {2,}/;
    var re3 = /( ')|(' )|('-)|(-')|(- )|( -)/;
    var re4 = /( )|(')|(-)/;
    var re5 = /[^A-Z]/;

    var valEltPrenom = document.getElementById('str'+PRENOM).value; //DOM via JS
    var valEltNom = $('#str'+NOM).val(); //DOM via JQ

    var trouve = null;

    trouve = re4.exec(valEltPrenom[valEltPrenom.length -1]); if (trouve) return "JS : Prénom se terminant par un espace, tiret ou apostrophe.";
    trouve = re4.exec(valEltNom[valEltNom.length -1]);       if (trouve) return "JS : Nom se terminant par un espace, tiret ou apostrophe.";

    trouve = re4.exec(valEltPrenom[0]); if (trouve) return "JS : Prénom commençant par un espace, tiret ou apostrophe.";
    trouve = re4.exec(valEltNom[0]);    if (trouve) return "JS : Nom commençant par un espace, tiret ou apostrophe.";

    trouve = re1.exec(valEltPrenom); if (trouve) return "JS : Le prénom n'est pas correct";
    trouve = re1.exec(valEltNom);    if (trouve) return "JS : Le nom n'est pas correct";

    trouve = re2.exec(valEltPrenom); if (trouve) return "JS : Prénom avec doubles espaces, tirets ou apostrophes.";
    trouve = re2.exec(valEltNom);    if (trouve) return "JS : Nom avec doubles espaces, tirets ou apostrophes.";

    trouve = re3.exec(valEltPrenom); if (trouve) return "JS : Prénom avec espace, tiret ou apostrophe à la suite.";
    trouve = re3.exec(valEltNom);    if (trouve) return "JS : Nom avec espace, tiret ou apostrophe à la suite.";

    trouve = re5.exec(valEltPrenom[0]); if (trouve) return "JS : Le prénom doit commencer par une majuscule";
    trouve = re5.exec(valEltNom[0]);    if (trouve) return "JS : Le nom doit commencer par une majuscule";

    return "ok";
}

//<input type="email" id="email" pattern="[.\-a-z0-9]+@[\-a-z0-9]+\.[\-a-z0-9]+" name="email" required><br><br>

*/


/*
let form = document.createElement('form');
form.action = 'https://google.com/search';
form.method = 'GET';

form.innerHTML = '<input name="q" value="test">';

// le formulaire doit être dans le document pour le soumettre
document.body.append(form);

form.submit();

******************

btn.disabled = true
*/