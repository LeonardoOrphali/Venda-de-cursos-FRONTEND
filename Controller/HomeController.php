<?php

class  Abrir
{

    public function abrir(){

        include_once 'View/index.html';
    }
    public function AbrirEntrar(){
        include_once   'View/cadastro.html';
    }
    public function AbrirLogin(){
        include_once 'View/login.html';
    }

    public function AbrirCurso(){
        include_once 'View/marketing.html';
    }
}