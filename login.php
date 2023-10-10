<?php
include "db_conn.php";
// 데이터 조회
$sql = "SELECT * FROM users WHERE username='".$_POST['username']."' and password='". $_POST['password'] ."'";
echo $sql; // 디버깅용
echo "<br>";
$result = $conn->query($sql);
$row = $result->fetch_array();

if($row['username'])
{
    print($row['username']."님, 반갑습니다");
    $_SESSION['userid'] = $row['username'];
}
else
{
    print("로그인 실패");
}