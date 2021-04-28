<?php 

require("./database/conexao.php");

//receber o id tarefa a ser editada
$tarefaId = $_GET["tarefaId"];

//select no banco de tarefa a ser editada

//SELECT * FROM rbl_task WHERE id - $resultado
$sqlSelect = "SELECT * FROM tbl_task WHERE id = $tarefaId";

//Executar a consulta (mysqli_query)
$resultado = mysqli_query($conexao, $sqlSelect);

//extrair a linha da consulta (mysql_fetch_arry)
$tarefa = mysqli_fetch_array($resultado);
if(!$tarefa){
    die("Impossivel editar, tarefa não encontrada.");
}

//colocar dentro do value do input a descrição da tarefa retornada do banco de dados

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="styles-global.css" />
</head>

<body>

    <div class="content">
        <h1>Editar Tarefa</h1>
        <form method="POST" action="taskActions.php">
            <input type="hidden" name="acao" value="editar" />
            <input type="hidden" name="tarefaId" value="<?= $tarefa["id"] ?>" />
            <div class="input-group">
                
                <label for="tarefa">Descrição da tarefa</label>
                <input type="text" value="<?= $tarefa["descricao"] ?>" name="tarefa" id="tarefa" placeholder="Digite a tarefa" required />
            </div>
            <button>Editar</button>
        </form>

    </div>

</body>

</html>