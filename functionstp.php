<?php

function validerPsw(){
    if ($_POST["psw"] != strip_tags($_POST["psw"])) return false;
    if ($_POST["psw"] != "AAA") return false;

    return true;
}

function validerForm2(){
    if ($_POST["email"] != strip_tags($_POST["email"])) return false;
    if ($_POST["story"] != strip_tags($_POST["story"])) return false;
    //print_r($_POST);
    
    return true;
}

function validerCaptcha(){
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=6Ldv5gAkAAAAAPFwjhV6iMKrQEbT_z3KliOPMNuB&response={$_POST['g-recaptcha-response']}";
    
    $response = file_get_contents($url);
    
    if(empty($response) || is_null($response)) {
        echo "empty $response";  //header('Location: index.php');
        return false;
    }
    else{
        $data = json_decode($response);
//echo $data->success;
        if($data->success) return true;
        else  return false;    //header('Location: index.php');
    }
}

//https://php.developpez.com/faq/?page=mail#:~:text=Pour%20envoyer%20un%20mail%20en,bien%20activ%C3%A9e%20par%20l%27h%C3%A9bergeur.

function envoyerMail(){
    $destinataire = 'christian.mareau@gmail.com';
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = $_POST["email"];
    $copie = '';
    $copie_cachee = '';
    $objet = 'CONTACT du MINI SITE' ; // Objet du message

    //$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers  = 'Reply-To: '.$expediteur."\n"; // Mail de reponse
    $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
    $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
    $headers .= 'Cc: '.$copie."\n"; // Copie Cc
    $headers .= 'Bcc: '.$copie_cachee."\n\n"; // Copie cachée Bcc        
    $message = htmlspecialchars($_POST["story"]);

    
    if (mail($destinataire, $objet, $message, $headers)) echo 'Votre message a bien été envoyé ';
    else echo "Votre message n'a pas pu être envoyé";
    

    echo phpinfo() ;




}

?>