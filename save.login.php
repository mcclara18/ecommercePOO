<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
  $_SESSION['usuario'] = $email;
  echo "Login feito!";
} else {
  echo "Erro no login";
}
?>
