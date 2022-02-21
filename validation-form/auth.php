<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."fgdhdghdfghft");

    $mysql = new mysqli('localhost','root','','register-bd');

    // if ($mysqli->connect_error) {
    //     die('Ошибка подключения (' . $mysql->connect_errno . ') ' . $mysql->connect_error);
    // }
    // echo '<p>Соединение установлено... ' . $mysql->host_info . "</p>";
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` ='$pass' ");

    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "Такой пользователь не найден";
        exit();
    } 

    setcookie('user', $user['name'], time() + 3600, "/");

    $mysql->close();
    header('Location: /');
?>