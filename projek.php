<?php
namespace App\Models;

class Product {
    private string $name;
    private float $price;

    public function __construct(string $name, float $price) {
        $this->name  = $name;
        $this->price = $price;
    }

    public function getInfo(): string {
        return "{$this->name} - Rp" . number_format($this->price, 0, ',', '.');
    }
}
