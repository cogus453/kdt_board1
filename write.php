<?php
include 'db_conn.php';

$title = $_POST['title'];
$contents = $_POST['contents'];
$sql = "INSERT INTO posts(title,contents) VALUES('".$title."','".$contents."')";
$result = $conn->query($sql);
print($title);
print("<br>");
print($contents);
?>