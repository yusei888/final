<?php require 'db-connect.php'; ?>
<a href="index.php">メニューに戻る</a>
<?php
echo '<table>';
echo '<tr><th>選手ID</th><th>選手名</th><th>チーム名</th><th>パワー</th></tr>';
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->query('select * from NPB');
foreach($sql as $row){
        echo "<tr><td>" . $row["player_id"] . "</td><td>" . $row["player_name"] . "</td><td>" . $row["team_name"] . "</td><td>". $row["power"] . "</td><td><a href='NPB-update-input.php?id=" . $row["player_id"] . "'>更新</a></td></tr>";
}
    echo "</table>";

?>