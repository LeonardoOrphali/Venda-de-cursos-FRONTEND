<?php

class Conexao{

    public static function Conectar(){

        $host = "localhost";//servidor
        $port = "3306";//porta
        $dbname= ""; //nome do banco de dados
        $user = ""; //usuário do BD
        $pwd = ""; //senha do BD

        //enviar as informações para acesso do servidor de BD
        $con = new PDO("mysql:host=$host;
        port=$port;dbname=$dbname",$user, $pwd);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;




    }

}

