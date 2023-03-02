<?php

if (!empty($_POST)) {
    require __DIR__ . "/auth.php";

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkAuth($login, $password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: /index.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}


?>

<html>
<head>
    <title>Страница входа</title>
</head>
<body>
<?php if (isset($error)): ?>
<span style="color: red"><? $error ?>Ошибка авторизации</span>
<?php endif;?>
<form action="/login.php" method="post">
    <input type="text" name="login">
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit" value="ВОЙТИ">
</form>
</body>
</html>