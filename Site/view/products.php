<?php
/**
 * ICT-133_JBR - products.php
 * User: Jan.BLATTER
 * Date: 20.01.2020
 */
// tampon de flux stocké en mémoire
ob_start();
$titre="Rent  A Snow - Accueil";

$decode= json_decode("model/fichier.json");
?>
   <table>



   </table>
<?php
$content = ob_get_clean();
require "gabarit.php";

