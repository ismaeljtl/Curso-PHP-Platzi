<?php

require_once 'config.php';   

$queryResult = $pdo->query("SELECT * FROM mydb.User");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add user</title>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

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
        <h1 class="text-center">List users of the application</h1>
        <br>

        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Edit user</th>
                <th>Delete user</th>
            </tr>
            <tr>
            <?php 
                foreach ($queryResult as $user){
                    echo '<tr>';
                    echo '<td>' . $user['id'] . '</td>';
                    echo '<td>' . $user['user'] . '</td>';
                    echo '<td>' . $user['email'] . '</td>';
                    echo '<td><a href="update.php?id=' . $user['id'] . '">Edit</a></td>';
                    echo '<td><a href="delete.php?id=' . $user['id'] . '">Delete</a></td>';
                    echo '</tr>';
                }
            ?>
            </tr>
        </table>
        
    </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>