<?php

include_once 'Controller/HomeController.php';

//Minha URL
define('URL','http://localhost/Venda-de-cursos/home');

if(isset($_GET['url']))
{
    $url = explode('/', $_GET['url']);
    switch($url[0])
    {
        //Rotas do site

        case'home':
            $usu = new Abrir();
            $usu->abrir();
        break;
        case 'cadastrar':
            $usu = new Abrir();
            $usu->AbrirEntrar();
            break;

        case 'login':
            $usu = new Abrir();
            $usu->AbrirLogin();
        break;

        case 'curso' :
            $usu = new Abrir();
            $usu->AbrirCurso();
            break;

       








    }
}