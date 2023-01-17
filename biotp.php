<?php

session_start();

require "constantstp.php";
require "functionstp.php";

require "headertp.php";
require "modele_centre.php";
require "menutp.php";

echo "<div id=\"div-bio\">";
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
    echo "Voici la bio";
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "</div>";

require "footertp.php";

echo "<script type=\"text/javascript\" src=\"scriptbiotp.js\"></script>
</body>
</html>";