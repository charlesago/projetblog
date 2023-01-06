<?php


$adresseDB = "localhost";
$nomDeDataBase = "blog";
$username = "blogger";
$password = "Charlesago26";

$pdo = new PDO("mysql:host=$adresseDB;dbname=$nomDeDataBase", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

$request = $pdo->query("SELECT * from posts");

$posts = $request->fetchAll();

$input = "rien";

if( !empty($_GET['carotte']) ){

    $input = $_GET['carotte'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-dark justify-content-space-between">
        <div class="container-fluid">
            <a class="navbar-brand text-primary" href="#">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="create-post.php">Create post</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
<body>

<div class="container">
    <div class="col-12 row d-flex">
    <?php
    foreach ($posts as $post) :
        ?>

        <div class="card text-center order-info mb-3 m-2" style="max-width: 18rem;">
            <div class="card-header">
                Articles
            </div>
            <div class="card-body ">
                <h5 class="card-title titre"><?= $post["title"]?></h5>
                <p class="card-text"><?= $post["content"]?></p>
                <a href="update-post.php?id=<?= $post['id'] ?>" class="btn btn-primary ">Edit</a>
                <a href="post.php?id<?= $post['id'] ?>" class="btn btn-success ">Ouvrir</a>
                <form method="post" action="delete-post.php">
                    <button class="btn-danger btn"><input class="btn btn-danger" name="id" type="hidden" value="<?= $post["id"]?>">DEL</button>
                </form>
            </div>

        </div>
    <?php endforeach; ?>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>