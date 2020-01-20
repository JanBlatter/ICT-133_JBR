<?php
/**
 * ICT-133_JBR - controler.php
 * User: Jan.BLATTER
 * Date: 16.12.2019
 */
session_start();

require "model/model.php";


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
            require "view/Welcome.php";
            $_SESSION['login'] = $username;                          /** récupération des données de Session */
            $_GET['action']="Welcome";                               /** récupération des données du GET */
        } else

            require "view/login.php";                                  /** sinon va sur login.php */
    }
    else{
        require "view/Welcome.php";                              /** sinon va sur welcome.php */
    }
}

function logout(){
    session_unset();
    session_destroy();
    require"view/login.php";
}

function register(){


    $fileJson="model/fichier.json";         /*chemin du fichier json*/

    $data=array(                            /*tableau $data où l'encodement de json travaille*/
        $username=@$_POST["username"],
        $password=@$_POST["password"],
    );

    $encode=json_encode($data);                         /* encode les données du tableau $data*/

    file_put_contents($fileJson,$encode);                   /* met le contenu du fichier dans le fichier.*/

    require"view/register.php";

}





