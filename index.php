<?php
require_once ('librairies/tools.php');

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
render("posts/index", [
    "posts"=>$posts,
    "pageTitle"=>"accueil du blog"
]);

?>

