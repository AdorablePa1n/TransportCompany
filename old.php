<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-4">

    <?php
        if($_COOKIE ['user'] == ''):
    ?>

        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
                <form action="validation-form/check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                    <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success"
                    type="submit">Зарегистрировать</button>
                </form>
            </div>
            <div class="col">
                <h1>Форма авторизации</h1>
                <form action="validation-form/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success"
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
                                <a href="index.html" class="header__link-active">Главная</a>
                            </li>
                            <li>
                                <a href="uslugi.html" class="header__link">Услуги</a>
                            </li>
                            <li>
                                <a href="About.html" class="header__link">О компании</a>
                            </li>
                            <li>
                                <a href="states.html" class="header__link">Статьи</a>
                            </li>
                            <li>
                                <a href="Contacts.html" class="header__link">Контакты</a>
                            </li>
                            <li>
                                <a href="Cab.html" class="header__link">Личный кабинет</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="pic-on-main">
            <div class="pic-on-main-back">

                <div class="container">
                    
                    <div class="calc">
                        <p>Калькулятор расчета стоимости</p>
                        <form class="calc-form">
                            <div class="row mb-3">
                            <div class="form-group col-md-6 col-sm-6">
                                <input type="text" name="date" class="form-control" id="weight" required="" placeholder="Вес (кг)" required=""/>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">

                                <input type="text" name="adress" id="vol" class="form-control" placeholder="Объем (куб^2)" required=""/>
                            </div>
                            </div>
                            <div class="custom-control custom-checkbox row d-flex justify-content-center mb-3">
                            <div class="col-md-3" style="visibility: visible;">
                                <input type="checkbox" id="load" name="mess" class="custom-control-input"/>
                                <label class="custom-control-label" for="load">Нужна погрузка</label>
                            </div>
                        
                            <div class="col-md-3" style="visibility: visible;">
                                <input type="checkbox" id="del" name="mess" class="custom-control-input"/>
                                <label class="custom-control-label" for="del">Доставка до места</label>
                            </div>
                        
                            <div class="col-md-3" style="visibility: visible;">
                                <input type="checkbox" id="frag" name="mess" class="custom-control-input"/>
                                <label class="custom-control-label" for="frag">Хрупкий груз</label>
                            </div>
                            </div>
                            <div class="row mb-3">
                        
                            <div class="form-group col-md-12">
                                <label for="range">Расстояние <span class="rasstoyanie">0</span> <span>км</span></label>
                                <input type="range" class="custom-range" min="50" max="5000" step="50" id="range" value="500"/>
                            </div>
                        
                            </div>
                            <div class="row col-12 mb-3"><span id="out">0.0</span> <span class="rub">₽</span></div>
                            <div class="row">
                                <div class="col-md-2 col-12">
                                <input type="button" name="adress" id="btn" class="btn-block btn btn-primary" value="Расчитать"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-p">
            <h2>Наши услуги</h2>
        </div>

        <div class="container-usl-back">
            <div class="container-usl">
                <div class="usl">
                    <h3>Грузоперевозки по России</h3>
                    <a href="" class="usl-but">Подробнее</a>
                </div>
                <div class="usl">
                    <h3>Международные перевозки</h3>
                    <a href="" class="usl-but">Подробнее</a>
                </div>
                <div class="usl">
                    <h3>Доставка грузов из Европы</h3>
                    <a href="" class="usl-but">Подробнее</a>
                </div>
                <div class="usl">
                    <h3>Доставка грузов из Китая</h3>
                    <a href="" class="usl-but">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="container-p">
            <h2><span>Популярные</span> перевозимые <span>грузы</span></h2>
        </div>
        <div class="container">
            <div class="per-gruz">
                <div>
                    <img src="img/gruz/1.png">
                    <p>Мебель</p>
                </div>
                <div>
                    <img src="img/gruz/2.png">
                    <p>Бытовая техника и электроника</p>
                </div>
                <div>
                    <img src="img/gruz/3.png">
                    <p>Автозапчасти</p>
                </div>
                <div>
                    <img src="img/gruz/4.png">
                    <p>Посуда</p>
                </div>
                <div>
                    <img src="img/gruz/5.png">
                    <p>Сантехника</p>
                </div>
                <div>
                    <img src="img/gruz/6.png">
                    <p>Ткани</p>
                </div>
                <div>
                    <img src="img/gruz/7.png">
                    <p>Сувенирная продукция</p>
                </div>
                <div>
                    <img src="img/gruz/8.png">
                    <p>Оборудование для HoReCa</p>
                </div>
                <div>
                    <img src="img/gruz/9.png">
                    <p>Среднее промышленное оборудование</p>
                </div>
                <div>
                    <img src="img/gruz/10.png">
                    <p>Светотехническое оборудование</p>
                </div>
                <div>
                    <img src="img/gruz/11.png">
                    <p>DIY</p>
                </div>
                <div>
                    <img src="img/gruz/12.png">
                    <p>Оргтехника</p>
                </div>
            </div>

            







                <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a></p>
            <?php endif;?>

        </div>
        
    </div>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/calc.js"></script>
</body>
</html>