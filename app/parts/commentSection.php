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