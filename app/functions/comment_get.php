<?php 

$comment_array = array();

//コメントデータをテーブルからしゅとくする
$sql = "SELECT * FROM comment";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$comment_array = $stmt;

//var_dump($comment_array->fetchAll());

?>