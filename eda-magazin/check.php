<?php  

    $tell = filter_var(trim($_POST['tell']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $downKey = filter_var(trim($_POST['downKey']), FILTER_SANITIZE_STRING);

    if(mb_strlen($tell) < 5 || mb_strlen($tell) > 23) {
        echo "Недопустимая длинна логина";
        exit();
    }
    if(mb_strlen($pass) < 6 || mb_strlen($pass) > 50) {
        echo "Недопустимая длинна пороли (от 6 до 50)";
        exit();
    }
    if(mb_strlen($downKey) < 6 || mb_strlen($downKey) > 50) {
        echo "Недопустимая длинна пороли (от 6 до 50)";
        exit();
    }
    if($downKey !== $pass) {
        echo "Подтверждение не совподает";
        exit();
    }

    $mysql = new mysqli('localhost', 'root', '', 'pirosmani');
    $mysql->query("INSERT INTO /`users` (`tell`, `pass`, `downKey`) VALUES('$login', '$pass', '$downKey')");

    $mysql->close();
    

?>