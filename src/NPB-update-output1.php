<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新フォーム</title>
</head>
<body>
    <?php
    echo '<form action="NPB-update-output.php?id=',$_GET['id'],'" method="post">';
    ?>
<h1>選手更新</h1>
    <div class ="top">
    <a href="index.php">メニューに戻る</a>
</div>
<hr>
<br>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('select * from NPB where player_id=?');
$sql->execute([$_GET['id']]);
foreach($sql as $row){
    $sql2=$pdo->prepare('select * from LEAGUE where league_id=?');
    $sql2->execute([$row['league_id']]);
    echo $row['player_id'],'<br>';
    foreach($sql2 as $row2){
        $sql3=$pdo->query('select * from LEAGUE');
        echo 'リーグ:<select name="league_name">';
        echo '<option value=""></option>';
        foreach($sql3 as $row3){
            echo '<option value="',$row3['league_name'],'">',$row3['league_name'],'</option>';
        }
    }
    echo '</select><br>';
    echo '選手名:<input type="text" name="player_name" value="',$row['player_name'],'"><br>';
    echo 'チーム名:<input type="text" name="team_name" value="',$row['team_name'],'"><br>';
    echo 'パワー:<input type="text" name="power" value="',$row['power'],'"><br>';
}
echo '<button type="submit">更新</button>';
?>
</form>
</body>
</html>