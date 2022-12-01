<?php 

$user = "takabook";
$pass = "Mori1207";
//DBと接続
try {
    $pdo = new PDO('mysql:host=localhost;dbname=book_php', $user, $pass);
        //echo "DBとの接続に成功しました";
} catch (PDOException $error){
    echo $error->getMessage();
}

?>