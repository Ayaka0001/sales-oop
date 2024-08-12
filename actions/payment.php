<?php

require "../classes/product.php";

$product = new Product;

$product -> payForProduct($_POST);
?>