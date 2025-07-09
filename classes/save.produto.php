<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];

$sql = "INSERT INTO produtos (nome, preco, estoque) VALUES ('$nome', '$preco', '$estoque')";
if (mysqli_query($conn, $sql)) {
  echo "Produto cadastrado!";
} else {
  echo "Erro ao cadastrar";
}
?>
