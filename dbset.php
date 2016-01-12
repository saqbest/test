<?php
$top=$_POST['top'];
$left=$_POST['left'];
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root','');
$stmt = $dbh->prepare("UPDATE position SET `top`=:top,`left`=:left");
$stmt->bindParam(':top', $top);
$stmt->bindParam(':left', $left);
$stmt->execute();
?>