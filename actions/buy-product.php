<?php

require "../classes/product.php";

$product = new Product;

$product -> buyProduct($_POST);
?>