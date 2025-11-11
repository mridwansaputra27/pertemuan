{
  "name": "username/my-php-app",
  "description": "Contoh project PHP sederhana dengan namespace dan autoload",
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  },
  "require": {}
}
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
<?php
namespace App\Controllers;

use App\Models\Product; // ← contoh import class

class ProductController {
    public function showProduct() {
        $product = new Product("Kopi Arabika", 25000);
        echo $product->getInfo();
    }
}
<?php
require __DIR__ . '/../vendor/autoload.php'; // autoload Composer

use App\Controllers\ProductController;

$controller = new ProductController();
$controller->showProduct();


