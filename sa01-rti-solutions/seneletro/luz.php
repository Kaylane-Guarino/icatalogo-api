<?php
    if(!isset($_GET["nome"])
        || !isset($_GET["endereco"])
        || !isset($_GET["consumo"])){

            header("location: index.php");
}

$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$consumo = $_GET["consumo"];

if($consumo > 120){
    $valorDaConta = $consumo * 0.42;
}else{
    $valorDaConta = $consumo * 0.32;
}
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles-global.css" />
        <title>Conta de luz</title>
    </head>
    <body>
        <h1>Conta de luz de <?= $nome ?></h1>
        <?= $endereco ?>
        <h1>Valor da conta: R$<?= $valorDaConta ?></h1>
        <?php 
            if($consumo > 120){
                echo "<h1 style='color: red'>Consumo:<em> $consumo Wh </em></h1>";
            }else{
                echo "<h1 style='color: blue'>Consumo:<em> $consumo Wh </em></h1>";
                echo "<h1>Obrigado por economizar!</h1>";
            }
        ?>
    </body>
</html>