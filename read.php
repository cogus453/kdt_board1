
<?php
include "db_conn.php";
    
    
$sql = "SELECT * FROM posts WHERE no=".$_GET['idx'];
$result = $conn->query($sql); #데이터를 가져옴
$row = $result->fetch_array(); # 보기좋게 정리함
 
    
print("게시글번호:".$row['no']);
print("<br>게시글제목:".$row['title']);
print("<br>게시글내용:".$row['contents']);


?>
