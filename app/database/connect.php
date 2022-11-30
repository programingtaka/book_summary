<?php 

$user = "takabook";
$pass = "Mori1207";
//DBと接続
//DBが接続できているかの確認
try {
    $pdo = new PDO('mysql:host=localhost;dbname=book_php', $user, $pass);
    //echo "DBの接続完了";
} catch (PDOException $e){
    echo $e->getMessage();
}

?>