<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選手削除</title>
</head>
<body>
    <h1>選手削除</h1>
    <div class ="top">
    <a href="index.php">メニューに戻る</a>
</div>
<hr>
<br>
<?php
   $pdo=new PDO($connect, USER, PASS);
   $sql=$pdo ->prepare('delete from NPB where player_id=?');
   $sql->execute([$_GET['id']]);
?>
<h2>削除成功</h2>
</body>
</html>