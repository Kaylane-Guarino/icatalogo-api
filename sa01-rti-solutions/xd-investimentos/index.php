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
        <form method="GET" action="conversaoDeEuroEDolar.php">
            <h1>Converta Real para Ruro e Dólar</h1>
            <div class="input-group">
                <label for="valorReal">Valor em Real:</label>
                <input type="number" name="valorReal" required></input>
            </div>
            <div class="input-group">
                <label for="selecaoCombobox">Selecione para qual deseja converter</label>
                <select name="selecaoCombobox" required>
                    <option value="euro">Euro</option>
                    <option value="dolar">Dólar</option>
                </select>
            </div>

            <button>Converter</button>
        </form>
    </body>
</html>