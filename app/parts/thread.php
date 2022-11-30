<?php 

include_once("./app/database/connect.php");

$error_message = array();

if(isset($_POST["submitButton"])){
    //名前入力チェック
    if(empty($_POST["username"])){
        $error_message["username"] = "お名前を入力してください";
    } else {
    }
    //要約点１入力チェック
    if(empty($_POST["body1"])){
        $error_message["body1"] = "要約点1を入力してください";
    } else {
        //エスケープ処理
        $scaped["body1"] = htmlspecialchars($_POST["body1"], ENT_QUOTES, "UTF-8");
    }
    //要約点２入力チェック
    if(empty($_POST["body2"])){
        $error_message["body2"] = "要約点2を入力してください";
    } else {
        //エスケープ処理
        $scaped["body2"] = htmlspecialchars($_POST["body2"], ENT_QUOTES, "UTF-8");
    }

    //要約点３入力チェック
    if(empty($_POST["body3"])){
        $error_message["body3"] = "要約点3を入力してください";
    } else {
        //エスケープ処理
        $scaped["body3"] = htmlspecialchars($_POST["body3"], ENT_QUOTES, "UTF-8");
    }
    
    //エラーメッセージの内容がからだったらDBからデータを引っ張ってこれる
    if(empty($error_message)){
        $post_date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `comment` (`username`, `body1`, `body2`, `body3`, `memo`, `post_date`) VALUES (:username, :body1, :body2, :body3, :memo, :post_date);";
        $stmt = $pdo->prepare($sql);

        //値をセットする
        $stmt->bindParam(":username", $_POST["username"], PDO::PARAM_STR);
        $stmt->bindParam(":body1", $_POST["body1"], PDO::PARAM_STR);
        $stmt->bindParam(":body2", $_POST["body2"], PDO::PARAM_STR);
        $stmt->bindParam(":body3", $_POST["body3"], PDO::PARAM_STR);
        $stmt->bindParam(":memo", $_POST["memo"], PDO::PARAM_STR);
        $stmt->bindParam(":post_date", $post_date, PDO::PARAM_STR);
        $stmt->execute();
    }

    

}

$comment_array = array();

//コメントデータをテーブルからしゅとくする
$sql = "SELECT * FROM comment";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$comment_array = $stmt;

//var_dump($comment_array->fetchAll());

?>

<!-- スレッドエリア-->
    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>[本のタイトル]</span>
                <h1>test</h1>
            </div>
            <section>
                <?php foreach($comment_array as $comment):?>
                <article>
                    <div class="wrapper">
                        <div class="nameArea">
                            <span>名前：</span>
                            <p class="userName"><?php echo $comment["username"]?></p>
                            <time><?php echo $comment["post_date"];?></time>
                        </div>
                        <div class="summaryArea">
                            <span>要約点：</span>
                            <ol class="summary">
                                <li><?php echo $comment["body1"];?></li>
                                <li><?php echo $comment["body2"];?></li>
                                <li><?php echo $comment["body3"];?></li>
                            </ol>
                        </div>
                        <div class="commentArea">
                            <span>メモ：</span>
                            <p class="comment"><?php echo $comment["memo"];?></p>
                        </div>
                    </div>
                </article>
                <?php endforeach;?>
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
                    <input type="text" name="memo" class="form-control" placeholder="メモを入力してください">
                </div>
                <input type="submit" value="書き込む" name="submitButton">
            </form>
        </div>
    </div>