<?php
class Order extends Cart {
    public function checkout(User $user) {
        echo "<h3>Resumo do Pedido</h3>";
        echo $user->getProfile() . "<br>";
        $this->listCart();
        echo "Total: R$" . number_format($this->getTotal(), 2);
    }

    public function __destruct() {
        echo "<br><em>Pedido finalizado.</em>";
    }
}
