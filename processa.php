<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loja_virtual";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Falha de conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "INSERT INTO clientes (NOME, EMAIL, IDADE, CIDADE, ESTADO)
VALUES ('$nome', '$email', '$idade', '$cidade', '$estado')";

if ($conn->query($sql) === TRUE) {
  echo "Cadastro realizado com sucesso!";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>