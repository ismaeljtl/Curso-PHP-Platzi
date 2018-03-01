<?php  
$user = null;
$query = null;

if (!empty($_POST)){
    require_once 'config.php';

    //$query = "SELECT * FROM mydb.User WHERE email = '" . $_POST['email'] . "' AND password = '" . md5($_POST['password']) . "'";
    //$queryResult = $pdo->query($query);

    $query = "SELECT * FROM mydb.User WHERE email = :email AND password = :password";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'email' => $_POST['email'],
        'password' => md5($_POST['password'])
    ]);

    $user = $prepared->fetch(PDO::FETCH_ASSOC);
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Databases</title>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <a class="navbar-brand" href="#">Databases</a>
            <a class="nav-link active" href="list.php">List Users</a>
            <a class="nav-link" href="add.php">Add Users</a>
        </nav>
        <h1>Fake Login</h1>

        <form action="fakeLogin.php" method="POST">
            <div class="col-sm-6 offset-sm-3 input-group">
                
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
                
                <input class="btn btn-primary" type="submit" value="Login" style="margin: auto;">
            </div>
        </form>
    </div>

    <h2>Query</h2>
    <div>
    <?php 
        print_r($query);
    ?>
    </div>

    <h2>Data de usuario</h2>
    <div>
        <?php 
            print_r($user);
        ?>
    </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>