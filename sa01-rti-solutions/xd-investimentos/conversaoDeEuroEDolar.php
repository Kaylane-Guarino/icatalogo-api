<?php
    if(!isset($_GET["valorReal"])
        || !isset($_GET["selecaoCombobox"])){

            header("location: index.php");
}

$cotacaoDolar = "5.41";
$cotacaoEuro = "6.57";
$valorReal = $_GET["valorReal"];

if($_GET["selecaoCombobox"] == "euro"){
    $valorConvertido = $valorReal * $cotacaoEuro;
}else{
    $valorConvertido = $valorReal * $cotacaoDolar;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles-global.css" />
        <title>Document</title>
    </head>
    <body>

        <h1>Valor total em <?= $_GET["selecaoCombobox"] ?>: $<?= $valorConvertido ?></h1>
            <h1>
            A cotação é:
            <?php 
            
            if($_GET["selecaoCombobox"] == "euro"){
                echo $cotacaoEuro;
            } else{
                echo $cotacaoDolar;
            }

            ?>
            </h1>

    </body>
</html>