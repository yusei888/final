<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>選手登録</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>選手を登録</h2>
<a href="index.php">メニューに戻る</a>
<hr>
<form action="NPB-output.php" method="post">
    選手名：<input type="text" name="name">
    <br>
    リーグ：<input type="radio" name="rigu"value="1">パリーグ
    <input type="radio" name="rigu"value="2">セリーグ
    <input type="radio" name="rigu"value="3">アリーグ
    <input type="radio" name="rigu"value="4">ナリーグ
    <br>
    チーム名：<input type="text" name="kyu">
    <br>
    パワー：<input type="text" name="power">
    <br>
    <button type="submit" name="action" value="send">登録</button>
    <br>
</form>
</body>
</html>