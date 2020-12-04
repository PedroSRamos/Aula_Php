function listarClientes() {
    var itens = "";
    var url = "clienteDAO.php";

    $.ajax({
        url: url,
        cache: false,
        dataType: "json",
        success: function (retorno) {
            for (var i = 0; i < retorno.length; i++) {
                itens += "<option value='" + retorno[i].id_cliente + "' >";
                itens += retorno[i].nome
                itens += "</option>";
            }
            $("#nome").html(itens);
        }
    });
}

function getDataByClientId() {
    var itens = "";
    var url = "getDataForClient.php?id=" + id;

    $.ajax({
        url: url,
        cache: false,
        dataType: "json",
        success: function (retorno) {
            console.log(retorno)
        }
    });
}

function updateCliente() {
    var nome = document.getElementById('nome').value
    console.log(nome)
}