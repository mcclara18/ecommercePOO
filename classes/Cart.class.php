<?php
class Cart {
    protected $items = [];

    public function addProduct(Product $product, $quantity) {
        $this->items[] = [
            'product' => $product,
            'quantity' => $quantity
        ];
    }

    public function listCart() {
        foreach ($this->items as $item) {
            echo $item['product']->getInfo() . " - Quantidade: {$item['quantity']}<br>";
        }
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['product']->getPrice() * $item['quantity'];
        }
        return $total;
    }
}
