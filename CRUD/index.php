<?php include("includes/header.php"); ?>

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not, redirect to login page
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container my-5">
        <h2>List of Students</h2>
        <a href="create.php" class="btn btn-primary">New Student</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include_once("db.php");

                    $sql = "SELECT * FROM students ";
                    $result = $con->query($sql);

                    if(!$result){
                        die($con->error);
                    }
                        while($row = $result->fetch_assoc()){
                            echo " <tr>
                    <td>$row[id]</td>
                    <td>$row[firstname]</td>
                    <td>$row[lastname]</td>
                    <td>$row[age]</td>
                    <td>$row[created]</td>
                    <td>
                        <a href='edit.php?id=$row[id]' class='btn btn-primary btn-sm'>Edit</a>
                        <a href='delete.php?id=$row[id]' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>
                ";
                        }
                ?>
               
            </tbody>
        </table>
    </div>
</body>
</html>


 <?php include("includes/footer.php"); ?>
