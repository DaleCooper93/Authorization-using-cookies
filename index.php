<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();
?>

<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<?php if ($login !== null): {};?>
Добро пожаловать, <?= $login ?>
<?php else: ?>
<a href="/login.php">Авторизация</a>
<?php endif; ?>
</body>
</html>