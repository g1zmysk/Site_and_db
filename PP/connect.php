<?php
    $host = 'localhost';  // Хост, у нас все локально
    $user = 'root';    // Имя созданного вами пользователя
    $pass = ''; // Установленный вами пароль пользователю
    $db_name = 'school';   // Имя базы данных
    $connect = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
    if (!$connect) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;  }   // Ругаемся, если соединение установить не удалось
?>
