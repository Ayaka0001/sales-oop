<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <?php 
        session_start();
        require "../classes/product.php";

        $product = new Product;
        $all_products = $product -> getAllProducts();

        include_once "nav.php";
        ?>
                 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="row">
                    <div class="col">
                    <h2 class="h1 mb-4 fw-bold">Product List</h2>
                    </div>
                    <div class="col text-end h1">
                        <a href="add-product.php" class="text-decoration-none text-info">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>

                <table class="table">
                    <thead class="table-dark text-start">
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($row = $all_products -> fetch_assoc()){
                        ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['product_name'] ?></td>
                            <td><?= $row['price'] ?></td>
                            <td><?= $row['quantity'] ?></td>
                            <td>
                                <a href="edit-product.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <form action="../actions/delete-product.php" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <button type="submit" class="d-inline btn btn-sm btn-danger ms-2"><i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                                    <button type="submit" name="buy_product" class="btn btn-sm btn-primary ms-2">
                                    <a href="../views/buy-product.php?id=<?= $row['id'] ?>" class="text-decoration-none text-white">
                                        <i class="fa-solid fa-cart-shopping"></i> Buy Products
                                    </a>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

 </body>
</html>