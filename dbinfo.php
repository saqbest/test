<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root','');
$res=$dbh->prepare("SELECT * FROM `position`");
$res->execute();
$row = $res->fetch(PDO::FETCH_ASSOC);
//print_r($row);
echo json_encode($row);
?>