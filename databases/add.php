<?php

require_once 'config.php';

$result = false;
$alert = '';

if (!empty($_POST)){
    $name = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO mydb.User (user, email, password) VALUES (:user, :email, :password)";
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'user' => $name,
        'email' => $email,
        'password' => md5($password)
    ]);

    if ($result){
        $alert = 'Success';
    }else{
        $alert = 'Error';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add user</title>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <a class="navbar-brand" href="index.php">Databases</a>
            <a class="nav-link" href="list.php">List Users</a>
            <a class="nav-link active" href="add.php">Add Users</a>
        </nav>
    </div>

    <div class="container col-sm-8 col-offset-sm-2">
        <br>
        <h1 class="text-center">Add users to the application</h1>
        <br>
        <?php 
            if ($alert == 'Success'){
                echo '<div class="alert alert-success" role="alert">Successful registration</div>';
            }else if($alert == 'Error'){
                echo '<div class="alert alert-danger" role="alert">Successful registration</div>';                
            }
        ?>
        <form action="add.php" method="POST">
            <div class="col-sm-6 offset-sm-3 input-group">
                <div class="input-group" style="margin-bottom:10px">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="user">Username</span>
                    </div>
                    <input type="text" class="form-control" name="user">
                </div>

                <div class="input-group" style="margin-bottom:10px">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="email" 
                            style="padding-left:29px; 
                                   padding-right:29px; 
                                   text-align:center">Email
                        </span>
                    </div>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="input-group" style="margin-bottom:10px">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="password" 
                            style="padding-left:14px; 
                                   padding-tight:14px;
                                   text-align:center">Password
                        </span>
                    </div>
                    <input type="password" class="form-control" name="password">
                </div>
                
                <input class="btn btn-primary" type="submit" value="Submit" style="margin: auto;">
            </div>
        </form>
    </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>