<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

$res = mysqli_query($conn, "SELECT * FROM produtos");

while ($p = mysqli_fetch_assoc($res)) {
  echo "<p>".$p['nome']." - R$ ".$p['preco']."</p>";
  echo "<form method='POST' action='carrinho.php'>";
  echo "<input type='hidden' name='id' value='".$p['id']."'>";
  echo "<button>Adicionar</button>";
  echo "</form><hr>";
}
echo "<a href='ver_carrinho.php'>Ver carrinho</a>";
?>
