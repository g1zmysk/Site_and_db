<?php
require_once 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Личный кабинет</title>
</head>
<body>
    <header>
        <div class="header_lk">
            <div class="links">
            <a href="index.php">Главная</a>
                <div class="prof_pic">
                    <img src="img/profile.png" alt="">
                </div>
                <div class="per">
                    Права:
                    <p>ADMIN</p>
                </div>
            </div>
            <div class="lk">
                <h3>Личный кабинет</h3>
            </div>
        </div>
    </header>
    <div class="zapisi">
        <div class="zag_s2">
            <p>Записи</p>
        </div>
        <div class="lk_flex">
            <div class="block_lk">
                <?php
                    $sql_del = "SELECT * FROM `app`";
                    $sql = mysqli_query($connect, "SELECT * FROM `app`");
                    while ($result = mysqli_fetch_array($sql)) {
                        $id = $result['id_add'];
                        echo "<div class='app'>
                            <p> id: {$result['id_add']} </p>
                            <p> Имя: {$result['name_z']} </p><br>
                            <p> Фамилия: {$result['family']} </p> <br>
                            <p> E-Mail: {$result['email']} </p><br>
                            <p> Телефон: {$result['phone']} </p><br>
                            <p> Дата приёма: {$result['date']} </p>
                            <a href='delete.php?del_id={$result['id_add']}'>Отклонить</a>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="zag_s2">
        <p>Обращения в поддержку</p>
    </div>
    <div class="lk_flex">
        <div class="block_lk">
            <?php
                $sql2 = mysqli_query($connect, "SELECT * FROM `support` ");
                while ($result = mysqli_fetch_array($sql2)) {
                echo "<div class='app'>
                    <p> id: {$result['id_req']} </p> <br>
                    <p> Имя: {$result['name_s']} </p><br>
                    <p> Фамилия: {$result['family']} </p><br>
                    <p> E-Mail: {$result['email']} </p><br>
                    <p> Телефон:{$result['phone']} </p><br>
                    <p> Проблема: {$result['problem']} </p><br>
                    <p> Статус: {$result['status_req']}</p>
                    <a href='red.php?red_id={$result['id_req']}'>Решено</a> <br>
                    <a href='red.php?red2_id={$result['id_req']}'>Отклонено</a>
                </div>";
                }
            ?>
    </div>
    </div>
</body>
</html>