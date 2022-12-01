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