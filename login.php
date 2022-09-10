<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - Әфишка</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="login">
    <div class="header">
        <nav>
            <img src="./img/логотип.svg" alt="" width="100px">
            <a href="./index.php">главная</a>
            <a href="#">календарь</a>
            <a href="#">мероприятия</a>
            <a href="./login.php">вход</a>
        </nav>
    </div>

    <div class="loginmain">
        <form action="auth.php">
            <h2>Авторизация</h2>
            <p>email или логин</p>
            <input type="email" name="email" id="email">
            <p>пароль</p>
            <input type="password" name="pass" id="pass"><br>
            <button>войти в аккаунт</button><br>
            <a href="recover.php">восстановить доступ</a>
        </form>
    </div>

    <div class="registrationmain">
            <button><a href='./registration.php'>зарегистрироваться</a></button>
            <p>после регистрации вы получите доступ ко всем возможностям Әфишки</p>

    </div>
</body>
</html>