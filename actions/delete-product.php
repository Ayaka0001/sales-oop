<?php
require "../classes/product.php";

$product = new Product; 
$product -> deleteProduct($_POST['id']); 
?>