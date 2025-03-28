<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "loja_virtual";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Pega os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

// Prepara o SQL
$sql = "INSERT INTO clientes (nome, email, idade, cidade, estado)
VALUES ('$nome', '$email', '$idade', '$cidade', '$estado')";

// Executa e mostra resultado
if ($conn->query($sql) === TRUE) {
    echo "<h2 style='color: #e14e6b; text-align: center; font-family: Poppins, sans-serif; margin-top: 50px;'>Awn! Obrigada por preencher, gatinho! Seus dados foram salvos com sucesso!</h2>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>