<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="style.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="ajax.js" type="text/javascript"></script>
</head>

<body onload="listarClientes()">

    <?php include("header.php"); ?>

    <div class="container">

        <form action="#" class="campo">
            <label for="nome">Nome</label>
            <select id="nome" onload="getDataByClientId()">
            </select>
            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone">
            <label for="email">E-mail</label>
            <input type="email" id="email">

            <button class="botao" onclick="updateCliente()">Salvar</button>
        </form>



    </div>

</body>

</html>