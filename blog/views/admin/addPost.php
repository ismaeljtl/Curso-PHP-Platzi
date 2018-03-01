<?php

if (!empty($_POST)){
  $title = $_POST['title'];
  $description = $_POST['description'];

  $sql = "INSERT INTO mydb.Blog_posts (title, content) VALUES (:title, :description)";
  $query = $pdo->prepare($sql);
  $query->execute([
    'title' => $title,
    'description' => $description
  ]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Blog</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Administracion del Blog de Platzi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="post.php">Manage Posts</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container" style="margin-top:2%;">
    <div class="row">
      <div class="col-sm-12">
        <a href="post.php" class="btn btn-primary btn-md">Go Back</a>
        <h2>Nuevo Post:</h2>

        <form action="addPost.php" method="POST">
            <div class="col-sm-8 offset-sm-2 input-group">
                <div class="input-group" style="margin-bottom:10px">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="user">Title</span>
                    </div>
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Description</span>
                  </div>
                  <textarea class="form-control" name="description" rows="5"></textarea>
                </div>

                <input class="btn btn-primary" type="submit" value="Save" style="margin: auto;">
            </div>
        </form>

      </div>
    </div>
  </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>
