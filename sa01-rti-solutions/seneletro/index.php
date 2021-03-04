<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles-global.css" />
        <title>Conta de luz</title>
    </head>
    <body>
        <form method="GET" action="luz.php">
            <h1>Conta de luz</h1>
            <div class="input-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" name="nome" required></input>
            </div>

            <div class="input-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" required></input>
            </div>

            <div class="input-group">
                <label for="consumo">Consumo em Quilowatts por hora:</label>
                <input type="number" name="consumo" required></input>
            </div>

            <button>Enviar</button>
        </form>
    </body>
</html>