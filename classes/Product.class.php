<?php
class Product {
    protected $name;
    protected $price;
    protected $stock;
    const CURRENCY = "R$";

    public function __construct($name, $price, $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function getInfo() {
        return "{$this->name} - " . self::CURRENCY . number_format($this->price, 2);
    }

    public function getPrice() {
        return $this->price;
    }
}