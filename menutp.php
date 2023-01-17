
<?php

echo"<html>
<div ".($_SESSION['gogo'] == "ko" ? "class='menu d-none mb-2'" : "class='menu mb-2'").">
    <button id=\"bt-menu-accueil\" onclick=\"window.location.href = 'indextp.php';\">Accueil</button>
    <button id=\"bt-menu-bio\" onclick=\"window.location.href = 'biotp.php';\">Bio</button>
    <button id=\"bt-menu-contact\" onclick=\"window.location.href = 'contacttp.php';\">Contact</button>
</div>
</html>";

?>



