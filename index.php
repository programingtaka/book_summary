<?php 

include_once("./app/database/connect.php");

if(isset($_POST["submitButton"])){
    $username = $_POST["username"];
    echo $username;
    $body1 = $_POST["body1"]; 
    echo $body1;
    $body2 = $_POST["body2"]; 
    echo $body2;
    $body3 = $_POST["body3"]; 
    echo $body3;
}

$comment_array = array();

//コメントデータをテーブルからしゅとくする
$sql = "SELECT * FROM comment";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$comment_array = $stmt;

var_dump($comment_array);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブックサマリー</title>
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <header>
        <nav class="nav">
            <a class="nav-link active" href="#">ロゴ</a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" href="#">投稿を追加する</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">新規登録する</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ログイン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">検索</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- スレッドエリア-->
    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>[本のタイトル]</span>
                <h1>test</h1>
            </div>
            <section>
                <article>
                    <div class="wrapper">
                        <div class="nameArea">
                            <span>名前：</span>
                            <p class="userName">Shincode</p>
                            <time>2022/12/07</time>
                        </div>
                        <div class="summaryArea">
                            <span>要約点：</span>
                            <ol class="summary">
                                <li>あいおうえお</li>
                                <li>ra-men</li>
                                <li>saasisu</li>
                            </ol>
                        </div>
                        <div class="commentArea">
                            <span>メモ：</span>
                            <p class="comment">こめんとです</p>
                        </div>
                    </div>
                </article>
            </section>
            <form class="formWrapper" method="POST">
                <div class="form-group">
                    <label for="nameLabel">名前：</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="summaryLabel">要約点：</label>
                    <input type="text" name="body1" class="form-control" placeholder="要約点1を入力してください">             
                    <input type="text" name="body2" class="form-control" placeholder="要約点2を入力してください">
                    <input type="text" name="body3" class="form-control" placeholder="要約点3を入力してください">
                </div>
                <div class="form-group">
                    <label for="memoLabel">メモ：</label>
                    <input type="text" class="form-control" placeholder="メモを入力してください">
                </div>
                <input type="submit" value="書き込む" name="submitButton">
            </form>
        </div>
    </div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>