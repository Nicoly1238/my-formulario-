<?php
$host = "localhost";
$user = "root";
$senha = "1234";
$banco = "loja_virtual";

// Conexão
$conn = new mysqli($host, $user, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Pega os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

// Insere no banco
$sql = "INSERT INTO clientes (nome, email, idade, cidade, estado) 
        VALUES ('$nome', '$email', '$idade', '$cidade', '$estado')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>