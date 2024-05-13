<?php
    if (isset($_POST['submit'])) {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        //print_r('<br>');
        //print_r('Pedido: ' . $_POST['pedido']);
        //print_r('<br>');
        //print_r('Valor: ' . $_POST['valor']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $pedido = $_POST['pedido'];
        $valor = $_POST['valor'];

        $include = mysqli_querry($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,data_nasc,pedido,valor) VALUES ($nome,$email,$telefone,$data_nascimento,$pedido,$valor)");

    }
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecadastro.css" media="screen" />
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="cadastro.php" method="post">
            <fieldset>
                <legend><b>Cadastro de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone de Contato</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                </div>
                <br>
                <div class="inputBox">
                    <label for="pedido" class="labelInput">Pedido:</label>
                    <textarea cols="35" rows="4" id="pedido" class="inputUser" > </textarea><br>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="valor" id="valor" class="inputUser" required>
                    <label for="valor" id="valor" class="labelInput">Pagamento Recebido</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>