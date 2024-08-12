<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
<?php 
        session_start();
        include_once "nav.php";

        require "../classes/product.php";

        $product = new Product;
        $id = $_GET['id'];
        $product = $product -> findProduct($id);
    ?>
    <div class="container my-5 w-50">
        <form action="../actions/edit-product.php" method="post">
            <h2 class="display-2 text-warning fw-bold"><i class="fa-solid fa-pen-to-square"></i> Edit Product</h2>


            <input type="hidden" name="id" value="<?= $product['id'] ?>">

            <div class="row my-4 text-secondary">
                <div class="col">
                    <label for="product-name" class="form-label fw-light">Product Name</label>
                    <input type="text" name="product_name" id="product-name" class="form-control" value="<?= $product['product_name'] ?>" required>
                </div>
            </div>
            <div class="row text-secondary">
                <div class="col">
                    <label for="price" class="form-label fw-light">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" name="price" id="price" class="form-control" value="<?= $product['price'] ?>" required>
                    </div>
                </div>
                <div class="col">
                    <label for="quantity" class="form-label fw-light">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product['quantity'] ?>" required>
                </div>
            </div>
            <div class="row text-secondary">
                    <div class="col">
                        <label for="detail">Detail</label>
                        <textarea name="detail" id="detail" rows="5" class="form-control">
                            <?= $product['detail'] ?>
                        </textarea>
                    </div>
                </div>
            <button type="submit" class="btn btn-warning mt-4 w-100">Add</button>
        </form>
    </div>

 </body>
</html>