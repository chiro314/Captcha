<?php

session_start();

//require "constantstp.php";
require "functionstp.php";

require "headertp.php";
require "modele_centre.php";
require "menutp.php";

echo "<div id=\"div-message\">";  

    if(isset($_POST["formSubmit2"]) and $_POST["formSubmit2"] == 1){
        if (validerForm2()) {
            if(validerCaptcha()) envoyerMail(); 
            else echo "Vous êtes un robot !";
        }
        else echo "Ne saisissez pas de caractères non conformes";
    }
echo "</div>";



echo "<form method=\"post\" id=\"form2\" class=\"mb-3\">";
        
    echo "<br><label for =\"email\">Votre email : </label>
    <input type=\"email\" id=\"email\" name=\"email\" pattern=\"[.\-a-z0-9]+@[\-a-z0-9]+\.[\-a-z0-9]+\" required><br><br>";

    //<input type="email" id="email" pattern="[.\-a-z0-9]+@[\-a-z0-9]+\.[\-a-z0-9]+" name="email" required><br><br>

    echo "<label for =\"story\" rows=\"5\" cols=\"50\">Votre demande : </label><br>
    <textarea type=\"text\" id=\"story\" name=\"story\" minlength=\"5\" maxlength=\"500\"></textarea><br><br>";
    
    echo "<div class=\"g-recaptcha\" data-sitekey=\"6Ldv5gAkAAAAAIRTSDJqz2RY-DqswWEkqJBYlTOE\"></div>"; //clé du site

    echo "<input type =\"hidden\" name=\"formSubmit2\" value=\"1\"> 
        <br>
        <button type=\"submit\">Envoyer</button>

</form>";


require "footertp.php";

//https://nouvelle-techno.fr/articles/integrer-google-recaptcha-sur-votre-site

// https://www.synbioz.com/blog/tech/mettre-en-place-recaptcha-sur-un-formulaire

//https://developers.google.com/recaptcha/docs/display
//https://developers.google.com/recaptcha/docs/verify


echo "<script type=\"text/javascript\" src=\"scriptcontacttp.js\"></script>
</body>
</html>";