<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <div class="container my-5 w-50">
        <form action="../actions/login.php" method="post">
            <h1 class="display-2 text-center text-primary fw-bold mb-3">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>

            <table class="table-sm table-borderless mx-auto text-secondary">
                <tr>
                    <td>
                        <label for="username" class="form-label fw-light">Username</label>
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="USERNAME" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password" class="form-label fw-light">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="PASSWORD" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary w-100 mb-3 fw-light">Log in</button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-center">
                        <a href="register.php" class="btn btn-danger fw-light">Create an Account</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>

</body>
</html>