<?php


session_start();

class Servico {

    public $nome;
    public $email;
    public $senha;



  public function _construct() {

    include_once 'model/Conexao.php';
    
 }

    public function Logar(){
        
        $dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

        if(!empty($dados['sendlogin'])){

            $con = Conexao::Conectar();

            //QUERY PARA VERIFICAR NO BANCO SE O USUARIO E SENHA EXISTE
            $query = "SELECT * FROM usuario WHERE nome = :usuario && senha = :senha LIMIT 1";
            $cmd = $con ->prepare($query);
            $cmd->bindParam(':usuario',$dados['usuario'],PDO::PARAM_STR);
            $cmd->bindParam(':senha', $dados['senha'],PDO::PARAM_STR);
            $cmd->execute();
            $row_usuario = $cmd->fetch(PDO::FETCH_ASSOC);

            //VALIDA SE PEGOU O REGISTRO DO USUARIO
            if($row_usuario > 0){
                $_SESSION['usuario'] = 'logado';
                header('Location: cadastrar');
            }else{
                echo "<script>
                alert('Usuário ou senha incorreto!');
                window.location='".URL."login';
            </script>";
          }
        }
      }


       public function cadastrar(){

        $cad = new Servico();

        $cad->nome = $_POST[""];
        $cad->email = $_POST[""];
        $cad->senha = $_POST[""];
        $cad->cadastrar();
        echo   "<script>
                    alert('Dados gravados com sucesso!');
                       window.location='".URL."home';
                </script>";

       }




































}



