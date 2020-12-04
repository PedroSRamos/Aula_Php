<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="style.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="ajax.js" type="text/javascript"></script>
</head>

<body>

    <?php include("header.php"); ?>
    <div class="container">

        <form action="#" class="campo">
            <label for="data1">Data Entrada</label>
            <input type="date" id="data1">

            <label for="data2">Data Saída</label>
            <input type="date" id="data2">

            <select id="quarto" onload="getDataByClientId()">
            </select>

        </form>
        <button class="botao" onclick="cadastraCliente()">Salvar</button>

    </div>

</body>

</html>