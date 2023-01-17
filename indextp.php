<?php
//http://localhost/exo/J06-TP/indextp.php

session_start();
$_SESSION["gogo"]="ko";
$form1Ok=false;

//require "constantstp.php";
require "functionstp.php";

if(isset($_POST["formSubmit"]) and $_POST["formSubmit"] == 1){
    if (validerPsw()) {
        if(validerCaptcha()) {
            $form1Ok=true; //effacer form1
            $_SESSION["gogo"]="ok"; //Afficher menu...
        }
        else {
            $form1Ok=false;
            echo "Vous êtes un robot !";
        }
    }
    else {
        $form1Ok=false;
        echo "Ne saisissez pas de caractères non conformes";
    }
}

require "headertp.php";

require "modele_centre.php";

require "menutp.php";

echo "<form method=\"post\" id=\"form1\" ".($form1Ok ? "class='d-none mb-3'" : "class='mb-3'").">";
        
    echo "<label for =\"psw\">Entrez le mot de passe : </label><input type=\"password\" id=\"psw\" name=\"psw\" required><br>"; 
    
    echo "<div class=\"g-recaptcha\" data-sitekey=\"6Ldv5gAkAAAAAIRTSDJqz2RY-DqswWEkqJBYlTOE\"></div>"; //clé du site

    echo "<input type =\"hidden\" name=\"formSubmit\" value=\"1\">";
    echo "<br>";
    echo "<input type =\"submit\" value=\"Envoyer\">";

echo "</form>";




require "footertp.php";

echo "<script type=\"text/javascript\" src=\"scriptindextp.js\"></script>
</body>
</html>";