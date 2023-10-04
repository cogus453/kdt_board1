<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    $id = $_POST['username'];
    $password = $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $validId = trim(file_get_contents('id.txt'));
    $validPassword = trim(file_get_contents('password.txt'));

    if ($id == $validId && $password == $validPassword) {
        echo "로그인 성공";
    } else {
        $log = fopen("log.txt", "a");
        fwrite($log, "IP: " . $ip . ", 입력한 ID: " . $id . ", 입력한 비밀번호: " . $password . "\n");
        fclose($log);
        echo "로그인 실패";
    }
} else {
    echo "아이디와 비밀번호를 입력해주세요.";
}
?>
