<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Әфишка</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="login">
    <div class="header">
        <nav>
            <img src="./img/логотип.svg" alt="" width="100px">
            <a href="./index.php">главная</a>
            <a href="#">календарь</a>
            <a href="#">мероприятия</a>
            <a href="./login.html">вход</a>
        </nav>
    </div>

    <div class="regmain">
        <form action="registration.html">
            <h2>Регистрация</h2>
            <p>ваше имя</p>
            <input type="text" name="name" id="name">
            <p>логин</p>
            <input type="text" name="login" id="login"><br>
            <p>электронная почта</p>
            <input type="email" name="email" id="email"><br>
            <p>пароль</p>
            <input type="password" name="password" id="password"><br>
            <button>зарегистрироваться</button><br>

        </form>
    </div>
    <div class="checkboxfl">
        <div class="left">
            <input type="checkbox" name="agree" id="agree" class="lastcb"><label>Я согласен с условиями обработки персональных данных</label>
        </div>
    </div>
</body>
</html>