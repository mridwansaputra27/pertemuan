<?php
require __DIR__ . '/../vendor/autoload.php'; // autoload Composer

use App\Controllers\ProductController;

$controller = new ProductController();
$controller->showProduct();
