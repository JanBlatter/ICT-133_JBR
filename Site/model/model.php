<?php
/**
 * ICT_133_JBR_new - model.php
 * User: Jan.BLATTER
 * Date: 13.01.2020
 */


/**
 * Cette fonction permet de checker si le mot de passe et l'utilisateur sont corrects
 * @param $motdepasse : variable en praramètre
 * @param $utilisateur : variable en praramètre
 * @return bool
 *
 */
function checkLogin($motdepasse,$utilisateur)
{


    if ($motdepasse == 1234 && $utilisateur == "Jan@cpnv.ch") {         /* si */
        return true;
    } else
        return false;


}
?>
