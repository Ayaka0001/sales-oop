<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php 
    require "../classes/product.php";
    $product = new Product;
    $id = $_GET['id'];
    $product = $product -> findProduct($_GET['id']);
    ?>
    <div class="w-50 mx-auto text-center my-5">
        <h1 class="h4 mt-2 mb-4">Thank You!!</h1>

        <p class="mb-3">Your payment was successful.</p>
        <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a>

    </div>
 </body>
</html>