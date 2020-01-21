<?php
/**
 * ICT-133_JBR - controler.php
 * User: Jan.BLATTER
 * Date: 16.12.2019
 */
session_start();   // activation de la session.

require "model/model.php";  // appelle le fichier model, le fichier model est requis.


/**
 * Cette fonction permet de récupérer les données du Get
 */
function home(){
    $_GET['action']="home";
    require "view/home.php";

}

/**
 * Cette fonction permet de récupérer le username et le password de l'utilisateur
 * @param $POST : récupère les données
 */
function login($POST){
    $_GET['action']="login";
    $username=@$_POST["username"];
    $password=@$_POST["password"];

    if (!isset ($_SESSION['login'])) {      /** si la session login est activé alors ... */
        if (checkLogin($password, $username)) {          /** Si la fonction checklogin est correct , va sur la page welcome.php */
            require "view/Welcome.php";                             /** appele la page welcome.php , la page welcome est requise*/
            $_SESSION['login'] = $username;                          /** récupération des données de Session */
            $_GET['action']="Welcome";                               /** récupération des données du GET */
        } else

            require "view/login.php";                                  /** sinon va sur login.php */
    }
    else{
        require "view/Welcome.php";                              /** sinon va sur welcome.php */
    }
}
/**
 *Cette fonction permet de détruire la session
 */
function logout(){
    session_unset();
    session_destroy();
    require"view/login.php";                    // Appele le fichier. login.php est requis pour que ça marche.
}

/**
 * Cette fonction récupère les données écris par l'utilisateur pour encore les encoder et transporte vers l'autre page.
 */
function register(){


    $fileJson="model/snows.json";         /*chemin du fichier json*/

    $data=array(                            /*tableau $data où l'encodement de json travaille*/
        $username=@$_POST["username"],
        $password=@$_POST["password"],
    );

    $encode=json_encode($data);                         /* encode les données du tableau $data*/

    file_put_contents($fileJson,$encode);                   /* met le contenu du fichier dans le fichier json.*/

    require"view/register.php";                         /* Appele le fichier. register.php est requis pour que ça marche. */

}

/**
 *Cette fonction permet d'aller sur la page products.
 */
function products(){

    require"view/products.php";    // Appele le fichier. products.php est requis pour que ça marche.
}




