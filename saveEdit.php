<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data_nascimento'];
        $pedido = $_POST['pedido'];
        $valor = $_POST['valor'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',data_nasc='$data_nasc',pedido='$pedido',valor='$valor'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>