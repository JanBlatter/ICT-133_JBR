<?php
/**
 * ICT-133_JBR - Welcome.php
 * User: Janbl
 * Date: 13.01.2020
 */
// tampon de flux stocké en mémoire
ob_start(); //ouvre la mémoire tampon
$titre="Rent  A Snow - Accueil";

echo "<br>";
echo "Bienvenue , vous êtes actuellement connecté.";

$content = ob_get_clean();   //efface la mémoire tampon dans la variable $content
require "gabarit.php"; //Appele le fichier. gabarit.php est requis pour que ça marche.

?>
