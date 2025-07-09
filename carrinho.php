<?php
session_start();
$id = $_POST['id'];
$_SESSION['carrinho'][] = $id;
header("Location: produtos.php");
?>
