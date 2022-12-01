<?php 

include_once("./app/database/connect.php");

include("app/functions/comment_add.php");

include("app/functions/comment_get.php");

?>

<!-- スレッドエリア-->
    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>[本のタイトル]</span>
                <h1>test</h1>
            </div>
            <?php include("commentSection.php"); ?>
            <?php include("commentForm.php"); ?>
        </div>
    </div>