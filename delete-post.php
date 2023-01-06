<?php
//faire tout le nécéssaire pour récupérer le contenu de l'article depuis $_POST
//et le sauvegarder dans la DB à l'aide de PDO


$adresseDB = "localhost";
$nomDeDataBase = "blog";
$username = "blogger";
$password = "Charlesago26";

$pdo = new PDO("mysql:host=$adresseDB;dbname=$nomDeDataBase", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
$id = "";
$id = $_POST['id'];

//$request = $pdo->query('SELECT * from posts');
//$posts = $request->fetchAll();
//$request = $pdo->query("DELETE FROM posts WHERE `posts`.`id` = $id );");

$request = $pdo->prepare('DELETE FROM posts WHERE id = :id');
$request->execute([
    "id"=>$id
]);


header('Location: index.php');
?>
