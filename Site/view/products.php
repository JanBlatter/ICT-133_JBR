<?php
/**
 * ICT-133_JBR - products.php
 * User: Jan.BLATTER
 * Date: 20.01.2020
 */
// tampon de flux stocké en mémoire
ob_start(); //ouvre la mémoire tampon
$titre="Rent  A Snow - Accueil";

$json = file_get_contents("model/snows.json");
$decode = json_decode($json,true);
?>
    <html >
    <table width="100%">
        <tr>
            <th><h3 style="background-color: #FF7F50">Marque</h3></th>
            <th><h3 style="background-color: #FF7F50">Modèle</h3></th>
            <th><h3 style="background-color: #FF7F50">Longueur</h3></th>
            <th><h3 style="background-color: #FF7F50">Prix</h3></th>
        </tr>
        <?php
        foreach ($decode as $variable) {            //foreach , met les élements clés dans le tableau qui se trouve sur le fichier snows.json

            echo "<tr>";
            echo '<td align="center" bgcolor="#FF7F50"><DIV class="dateclass">' . $variable['brand'] . '</DIV>';
            echo "</td>";

            echo '<td align="center" bgcolor="#FF7F50">' . $variable['model'];
            echo "</td>";

            echo '<td align="center" bgcolor="#FF7F50">' . $variable['length'];
            echo "</td>";

            echo '<td align="center" bgcolor="#FF7F50">' . $variable['price'];
            echo "</td>";
            echo "</tr>";

        }

        echo '</table>';

        ?>


    </html>

<?php
$content = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "gabarit.php"; // Appele le fichier. gabarit.php est requis pour que ça marche.

