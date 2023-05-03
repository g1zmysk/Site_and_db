<?php
    session_start();
    require_once 'connect.php';
    $sql = mysqli_query($connect, "SELECT * FROM `users`");
    $sql = mysqli_fetch_all($sql);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body style="text-align: center" class="container">
    <div class="logo_reg">
        <img src="img/1.png" alt="">
    </div>
    <form action="add.php" method="POST"><br>
    <h2>Войти в аккаунт</h2>
        <input type="text" id="login" name="login" placeholder="Введите логин"> <br> <br>
        <input type="password" id="pass" name="pass" placeholder="Введите пароль"> <br><br>

        <button class=" btn-primary w-25" type="submit">Вход</button><br> <br>
          
    </form>
    <button class="w-25" style="background: #046666; color: white" onclick="window.location.href = 'index.php'" type="submit">Вернуться обратно</button><br><br>
    <button class="w-25" style="background: #046666; color: white" onclick="window.location.href = 'reg.php'" type="submit">Регистрация</button><br>    
</body>
</html>
