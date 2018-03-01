<?php 
require_once 'config.php';

if (!empty($_POST)){
    $id = $_POST['id'];
    $newName = $_POST['user'];
    $newEmail = $_POST['email'];

    $sql = 'UPDATE mydb.User SET user=:user, email=:email WHERE  id=:id';
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id,
        'user' => $newName,
        'email' => $newEmail
    ]);

    $nameValue = $newName;
    $emailValue = $newEmail;
    
}else if (!empty($_GET)){
    $id = $_GET['id'];
    $sql = 'SELECT * FROM mydb.User WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id
    ]);

    $row = $query->fetch(PDO::FETCH_ASSOC);

    $nameValue = $row['user'];
    $emailValue = $row['email'];
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
            <a class="nav-link active" href="list.php">Go back</a>
        </nav>
        <h1>Update a user!</h1>
    </div>

    <div class="container col-sm-8 col-offset-sm-2">
        <br>
        <h1 class="text-center">Add users to the application</h1>
        <br>

        <form action="" method="POST">
            <div class="col-sm-6 offset-sm-3 input-group">
                <div class="input-group" style="margin-bottom:10px">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="user">Username</span>
                    </div>
                    <input type="text" class="form-control" name="user" value=<?php echo $nameValue ?> >
                </div>

                <div class="input-group" style="margin-bottom:10px">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="email" 
                            style="padding-left:29px; 
                                   padding-right:29px; 
                                   text-align:center">Email
                        </span>
                    </div>
                    <input type="text" class="form-control" name="email" value=<?php echo $emailValue ?>>
                </div>
                <input type="hidden" name="id" value=<?php echo $id; ?>>
                <input class="btn btn-primary" type="submit" value="Update" style="margin: auto;">
            </div>
        </form>
    </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>