<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход/Регистрация</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="css/main.css"> -->

</head>
<body>
    <div class="login container">

    <?php
        if($_COOKIE ['user'] == ''):
    ?>
            <div class="row">
                <div class="col">
                    <h2>Форма регистрации</h2>
                    <form action="validation-form/check.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                        <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                        <button class="btn-success"
                        type="submit">Зарегистрироваться</button>
                    </form>
                </div>
                <div class="col">
                    <h2>Форма авторизации</h2>
                    <form action="validation-form/auth.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                        <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                        <button class="btn-success"
                        type="submit">Авторизоваться</button>
                    </form>
                </div>
    <?php else:?>
                <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__body">
                    <a href="#" class="header__logo">
                        <img src="./img/logo.png" alt="LOGO" class="header__logo-pic">
                    </a>
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <nav class="header__menu">
                        <ul class="header__list">
                            <li>
                                <a href="main.html" class="header__link">Главная</a>
                            </li>
                            <li>
                                <a href="uslugi.html" class="header__link">Услуги</a>
                            </li>
                            <li>
                                <a href="About.html" class="header__link">О компании</a>
                            </li>

                            <li>
                                <a href="Contacts.html" class="header__link">Контакты</a>
                            </li>
                            <li>
                                <a href="index.php" class="header__link-active">Личный кабинет</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="container-p">
            <h2>Личный кабинет</h2>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br>
                <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a></p>
            <?php endif;?>

        </div>
        
    </div>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/calc.js"></script>
</body>
</html>