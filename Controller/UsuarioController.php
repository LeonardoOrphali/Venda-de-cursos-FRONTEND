<?php

include_once 'Model/Servico.php';


class UsuarioController 
{

    public $login;

    function logof(){
        if(!isset($login)){
            session_destroy();
            header('login');
        }
    }

    //VERIFICA SE TEM LOGIN PARA O LOGIN
     function Valid_login(){
        if(!isset($_SESSION['usuario'])){
            echo "<script>
            window.location='".URL."login';
        </script>";
    exit;
        }
     }

    public function Cadastrar(){

        $cad = new Servico();

        $cad->nome = $_POST[""];
        $cad->email = $_POST[""];
        $cad->senha = $_POST[""];
        $cad->Cadastrar();

        echo "<script>
        alert('Dados atualizados com sucesso!');
        window.location='".URL."index';
       </script>";
    }

     

}