<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>データ更新</title>
</head>
<body>
<form action ="NPB-update-output1.php" method="post">
        <h1>選手更新</h1>
        <div class="top">
        <a href="index.php">メニューに戻る</a>
</div>
<hr>
<br>
    <?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->query('select * from NPB');
    foreach($sql as $row){
        $sql2=$pdo->prepare('select * from LEAGUE where league_id=?');
        $sql2->execute([$row['league_id']]);
        echo $row['player_id'],':';
        foreach($sql2 as $row2){
            echo $row2['league_name'],':';   
        }
    
    echo $row['player_name'],'<br>';
    echo '<div class="team">',$row['team_name'],'</div>';
    echo '<div class="power">','パワー：',$row['power'],'</div>';
    echo '<a href ="NPB-update-output1.php?id=',$row['player_id'],'">更新</a>';
    echo '<br>';
    }
 ?>


</body>
</html>