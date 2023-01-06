<?php
//faire tout le nécéssaire pour récupérer le contenu de l'article depuis $_POST
//et le sauvegarder dans la DB à l'aide de PDO


$adresseDB = "localhost";
$nomDeDataBase = "blog";
$username = "blogger";
$password = "Charlesago26";

$pdo = new PDO("mysql:host=$adresseDB;dbname=$nomDeDataBase", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

if( !empty($_POST['postName']) ){
    $name = $_POST['postName'];
    $content = $_POST['postContent'];
    $request = $pdo->query("INSERT INTO `posts` (`id`, `title`, `content`) VALUES (NULL, '$name', '$content');");
    $posts = $request->fetchAll();
}
ob_start();
require_once ('template/posts/create.html.php');

    $pageContent = ob_get_clean();

require_once ('template/base.html.php');

?>

