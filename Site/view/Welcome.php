<?php
/**
 * ICT-133_JBR - Welcome.php
 * User: Janbl
 * Date: 13.01.2020
 */

ob_start();
$titre="Rent  A Snow - Accueil";

echo "<br>";
echo "Bienvenue , vous êtes actuellement connecté.";

$content = ob_get_clean();
require "gabarit.php";
?>
