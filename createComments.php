<?php

$id = null;

if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
}

require_once('pdo.php');


f( !empty($_POST['postName']) ){
$name = $_POST['postName'];
$content = $_POST['postContent'];
$request = $pdo->query("INSERT INTO `posts` (`id`, `title`, `content`) VALUES (NULL, '$name', '$content');");
$posts = $request->fetchAll();
}