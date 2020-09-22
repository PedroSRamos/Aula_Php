<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <br><br>
    <div class="cont">
        <form action="cadastro.php" method="POST">
            <div class="row">
                <div class="col">
                    <label for="Nome">Nome do cliente*</label>
                    <div class="campo">
                        <input type="text" name="NOME">
                    </div>
                </div>
                <div class="col">
                    <div class="campo">
                        <label for="Telefone">Telefone do cliente*</label>
                        <input type="tel" name="Telefone">
                    </div>
                </div>
                <div class="col">
                    <div class="campo">
                        <label for="Atividade">Atividade*</label>
                        <select name="Atividade" id="Atividade">
                            <option value="Segunda Via de Conta">Segunda Via de Conta</option>
                            <option value="Mudança de Endereço">Mudança de Endereço</option>
                            <option value="Suspensão do Serviço">Suspensão do Serviço</option>
                            <option value="Negociação de Débitos">Negociação de Débitos</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="botao"> Cadastrar </button>
        </form>


        <br><br><br>
        <h4>Listagem de atendimentos</h4> <br>
        <table class="Table">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Atividade</td>
                <td>Registro</td>
                <td>Atendimento</td>
                <td>Status</td>
                <td>Ações</td>
            </tr>
            <?php
            include("conexao.php");
            $query = mysqli_query($conexao, "SELECT * FROM atendimentos");

            while ($result = mysqli_fetch_array($query)) {

            ?>
                <div class="cont">
                    <form action="consulta.php" method="POST">
                        <?= "<input type='hidden' name='ID' value='" . $result['ID'] . "'>"; ?>
                        <tr>
                            <td><?= $result["ID"]; ?></td>
                            <td><?= $result["Nome"]; ?></td>
                            <td><?= $result["Telefone"]; ?></td>
                            <td><?= $result["Atividade"]; ?></td>
                            <td> <?php if ($result["Registro"] != '') echo (new DateTime($result["Registro"]))->format('d/m/Y H:i:s'); ?></td>
                            <td>
                                <?php if ($result["Atendimento"] != '') echo (new DateTime($result["Atendimento"]))->format('d/m/Y H:i:s'); ?>
                            </td>
                            <td><?= $result["Status"]; ?></td>
                            <td>
                                <?php
                                if ($result["Status"] == "espera") {
                                    echo " <button type='submit' name='btn' value='atender' class='botao'>Atender</button>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($result["Status"] == "espera") {
                                    echo "<button type='submit' name='btn' value='cancelar' class='botao'>Cancelar</button>";
                                }
                                ?>
                            </td>
                        </tr>
                    </form>
                </div>
            <?php } ?>

        </table>

    </div>
</body>

</html>