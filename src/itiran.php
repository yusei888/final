<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>選手一覧</title>
</head>
<body>
<a href="index.php">メニューに戻る</a> 
    <?php
echo '<table>';
echo '<tr><th>選手ID</th><th>選手名</th><th>チーム名</th><th>パワー</th></tr>';
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->query('select * from NPB');
foreach($sql as $row){
//$id=$row['id'];
echo '<tr>';
echo '<td>',$row['player_id'],'</td>';
echo '<td>',$row['player_name'],'</td>';
echo '<td>',$row['team_name'],'</td>';
echo '<td>',$row['power'],'</td>';
echo '</tr>';
}
echo '</table>';
?>
   
</body>
</html>