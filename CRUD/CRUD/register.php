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
    <div class="container bg-white shadow p-3 mt-5 ">
        <?php  if($_SERVER["REQUEST_METHOD"] == "POST"){

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repeatpassword = $_POST['repeatpassword'];

            $error = array();

            if(empty($username)|| empty($username)|| empty($username)|| empty($username)){
                array_push($error,"ALL FIELDS ARE REQUIRED");
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                array_push($error,"Email is not Valid");
            }
            if($password != $repeatpassword){
                array_push($error,"password not match");
            }

            include_once("db.php");

            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_num_rows($result);
            if($row > 0){
                array_push($error,"Email Already Exist!");
            }
            
            if(count($error)){
                foreach($error as $error){
                  echo  "<div class='alert alert-danger'>$error</div>";
                }
            }else{

                $sql = "INSERT INTO users (username,email,password) VALUES ( ?, ? , ?)";
                $stmt = mysqli_stmt_init($con);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if($prepareStmt){
                    mysqli_stmt_bind_param($stmt,"sss",$username,$email,$password);
                    mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>You are registered!</div>";
                }else{
                    die("Something went wrong");
                }
            }

        }   
            
        ?>

        <form action="register.php" method="post">
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="username" id="username" placeholder="Userame">
            </div>
            <div class="form-group mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="form-group mb-3">
                <input type="password" class="form-control" name="repeatpassword" id="repeatpassword" placeholder="Repeat Password">
            </div>
            <div class="form-btn mb-3">
                <input type="submit" class=" btn btn-primary" name="submit" value="register">
            </div>
        </form>
    </div>
</body>
</html>

<?php ?>