<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
<div class="navbar navbar-expand navbar-light mb-5">
    <div class="container-fluid">
        <a href="dashboard.php" class="navbar-brand">
            <h1 class="h2"><i class="fa-solid fa-house"></i></h1>    
        </a>

        <p class="text-center text-secondary h3">Welcome, <?= $_SESSION['username'] ?></p>
        
        <div class="navbar-nav">
            <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                <button type="submit" class="h2 text-danger bg-transparent border-0 shadow-none"><i class="fa-solid fa-user-xmark"></i></button>
            </form>
        </div>
    </div>
</div>
 </body>
</html>