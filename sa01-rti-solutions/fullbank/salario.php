<?php
    if(!isset($_GET["nome"])
        || !isset($_GET["salario"])){

            header("location: index.php");
}

$salario = $_GET["salario"];
$nome = $_GET["nome"];

if($salario >= 5000){
    $salarioComAcrescimo = $salario * 0.1 + $salario;
}else{
    $salarioComAcrescimo = $salario * 0.2 + $salario;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles-global.css" />
        <title>Seu salário com acréscimo</title>
    </head>
    <body>
    <h1><?= $nome ?> passará a receber R$ <em><?= number_format($salarioComAcrescimo, 2, ",", ".") ?></em></h1>
    </body>
</html>