<?php

session_start();

require("../../database/conexao.php");

switch($_POST["acao"]){
    case "login":
        //Receber os campos de formulários
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        //montar o sql select na tabela tbl_administrador
        $sql = "SELECT * FROM tbl_administrador WHERE usuario = '$usuario' and senha = '$senha';";
        echo($sql);

        $resultado = mysqli_query($conexao, $sql)  or die(mysqli_error($conexao));

        //verificar se o usuario existe e se a senha está correta
        if(mysqli_num_rows($resultado) == 0) {
            $mensagem = "Usuário ou Senha incorreto!";
            //redirecionar para a tela de listagem de produtos
            header("location:../../produtos/index.php?mensagem=$mensagem");
        }else{
            $row = mysqli_fetch_assoc($resultado);
            //se estiver correta, salvar o id e o nome do usuario na sessão
            $_SESSION["id"] = $row["id"];
            $_SESSION["nome"] = $row["nome"];

            //redirecionar para a tela de listagem de produtos
            header("location:../../produtos/index.php");
        }
        
    break;



    case "logout":

        //implementar o logout
        unset($_SESSION["id"]);
        unset($_SESSION["nome"]);

        header("location:../../produtos/index.php");


    break;
}

?>