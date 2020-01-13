<?php
/**
 * 133-Start - Welcome.php
 * User: Janbl
 * Date: 13.01.2020
 */
// tampon de flux stocké en mémoire
ob_start();
$titre="Rent  A Snow - Accueil";

echo "Bienvenue , vous êtes actuellement connecté.";

$content = ob_get_clean();
require "gabarit.php";
?>
