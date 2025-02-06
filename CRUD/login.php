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
        <?php 
             session_start();

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = $_POST['email'];
                $password = $_POST['password'];

                require_once("db.php");

                $sql = "SELECT * FROM users WHERE email = ?";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    
                    // Verify the password
                    if (password_verify($password, $user['password'])) {
                        $_SESSION['user_id'] = $user['id']; // Store user ID in the session
                        $_SESSION['email'] = $user['email']; // Store user email in the session
                        // Redirect to a protected page (e.g., dashboard)
                        header('Location: index.php');
                    } else {
                        echo "<div class='alert alert-danger'>password is Invalid</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Email is Invalid</div>";
                }
            
                $con->close();
            }
        ?>
 
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
        <div class="mt-3">
            <p>Not registered?<a href="register.php"> register here</a></p>
        </div>
    </div>
</body>
</html>