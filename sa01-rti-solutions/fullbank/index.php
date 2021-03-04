<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles-global.css" />
        <title>Aumento Salarial</title>
    </head>
    <body>
        <form method="GET" action="salario.php">
            <h1>Aumento Salarial</h1>
            <div class="input-group">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" required></input>
            </div>

            <div class="input-group">
                <label>Salario atual: </label>
                <input type="number" name="salario" required></input>
            </div>

            <button>Enviar</button>
        </form>
    </body>
</html>