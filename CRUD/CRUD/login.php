<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container bg-white shadow p-3 mt-5 pt-4 pb-4">
        <form action="login.php" method="post">
            <div class="form-group mb-3">
                <input type="text" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-btn ">
                <input type="submit" name="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</body>
</html>