<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

$total = 0;
echo "<h2>Itens no carrinho:</h2>";
if (isset($_SESSION['carrinho'])) {
  foreach ($_SESSION['carrinho'] as $id) {
    $res = mysqli_query($conn, "SELECT * FROM produtos WHERE id=$id");
    $p = mysqli_fetch_assoc($res);
    echo "<p>".$p['nome']." - R$ ".$p['preco']."</p>";
    $total += $p['preco'];
  }
}
echo "<h3>Total: R$ ".$total."</h3>";
echo "<form action='finalizar_pedido.php' method='POST'><button>Finalizar</button></form>";
?>
