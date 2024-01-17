<?php require 'db-connect.php'; ?>
<a href="index.php">メニューに戻る</a>
<?php
$pdo=new PDO($connect, USER, PASS);
$name = $_POST['name'];
$rigu = $_POST['rigu'];
$kyu = $_POST['kyu'];
$power = $_POST['power'];



$sql = "INSERT INTO  NPB(player_name,league_id,team_name,power) VALUES ('$name','$rigu','$kyu','$power')"; 
$pdo->query($sql);
<h2>登録完了</h2>
?>