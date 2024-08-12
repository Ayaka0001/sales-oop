<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <div class="container w-50">
        <form action="../actions/register.php" method="post">
            <h1 class="display-2 text-danger text-center fw-bold mt-4 p-0"><i class="fa-solid fa-user-plus"></i> Registration</h1>
            
            <div class="row my-4 text-secondary">
                <div class="col">
                    <label for="first-name" class="form-label fw-light">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                </div>
                <div class="col">
                    <label for="last-name" class="form-label fw-light">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                </div>
            </div>
            <div class="row text-secondary">
                <div class="col">
                    <label for="username" class="form-label fw-light">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
            </div>
            <div class="row text-secondary">
                <div class="col">
                    <label for="password" class="form-label fw-light">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-danger mt-4 w-100">Register</button>
        </form>
    </div>
                 

 </body>
</html>