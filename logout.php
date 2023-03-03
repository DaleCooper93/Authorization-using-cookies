<?php
require __DIR__ . '/index.php';
session_start();
unset($_COOKIE[session_name('login')]);
unset($_COOKIE[session_name('password')]);
session_unset();
session_destroy();
header("Location: /login.php");
exit;

