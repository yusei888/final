<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選手更新</title>
</head>
<body>
    

<h1>選手更新</h1>
    <div class ="top">
    <a href="index.php">メニューに戻る</a>
</div>
<hr>
<br>
<?php
   $pdo=new PDO($connect, USER, PASS);
   $sql=$pdo ->prepare('select * from LEAGUE where league_name=?');
   $sql->execute([$_POST['league_name']]);
   foreach($sql as $row){
    $sql2=$pdo->prepare('update NPB set league_id=?,player_name=?,team_name=?,power=? where player_id=?');
    $sql2->execute([$row['league_id'],$_POST['player_name'],$_POST['team_name'],$_POST['power'],$_GET['id']]);
   }
?>
<h2>更新成功</h2>


</body>
</html>