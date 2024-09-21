<?php
// Tampilkan cookies tanpa mengunduh
echo '<h1>Cookie Logs</h1>';
echo '<pre>' . htmlspecialchars(print_r($_COOKIE, true)) . '</pre>';
?>
