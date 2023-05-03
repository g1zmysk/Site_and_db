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
                    <p>USER</p>
                </div>
            </div>
            <div class="lk">
                <h3>Личный кабинет</h3>
            </div>
        </div>
    </header>
    <div class="zag_s2">
        <h3>Форма обратной связи</h3>
    </div>
    <div class="form">
        <form action="lk.php" method="POST">
            <input type="text" id="name_s" name="name_s" placeholder="Имя">
            <input type="text" id="family" name="family" placeholder="Фамилия">
            <input type="email" id="email" name="email" placeholder="E-Mail">
            <input type="text" id="phone" name="phone" placeholder="Номер телефона">
            <input type="text" id="problem" name="problem" placeholder="Опишите вашу проблему">
            <a href=""><button class="btn-1">Отправить</button></a>
            <?php
                if (isset ($_POST['name_s'])) {
                    $query = $connect->query("INSERT INTO `support` (`name_s`, `family`, `email`, `phone`, `problem`)
                    VALUES ('".$_POST['name_s']."','".$_POST['family']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['problem']."')");
                }
            ?>
        </form>
    </div>
    <div class="zag_s2">
        <h3>Запись на приём</h3>
    </div>
    <div class="form">
        <form action="lk.php" method="POST">
        <input type="text" id="name_z" name="name_z" placeholder="Имя">
        <input type="text" id="family" name="family" placeholder="Фамилия">
        <input type="email" id="email" name="email" placeholder="E-Mail">
        <input type="text" id="phone" name="phone" placeholder="Номер телефона">
        <input type="date" id="date" name="date">
        <a href="#"><button class="btn-1">Отправить</button></a>
    </form>
    <?php
        if (isset ($_POST['name_z'])) {
            $query2 = $connect->query("INSERT INTO `app` (`name_z`, `family`, `email`, `phone`, `date`)
            VALUES ('".$_POST['name_z']."','".$_POST['family']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['date']."')");
        }
    ?>
    </form>
    </div>
    <div class="zapisi">
        <div class="zag2">
            <p>Мои записи</p>
        </div>
        <div class="lk_flex">
            <div class="block_lk">
                <?php
                    $sql = mysqli_query($connect, "SELECT * FROM `app`");
                    while ($result = mysqli_fetch_array($sql)) {
                        echo "<div class='app'>
                            <p> id: {$result['id_add']} </p>
                            <p> Имя: {$result['name_z']} </p><br>
                            <p> Фамилия: {$result['family']} </p> <br>
                            <p> E-Mail: {$result['email']} </p><br>
                            <p> Телефон: {$result['phone']} </p><br>
                            <p> Дата приёма: {$result['date']} </p>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="zag_s2">
        <p>Мои обращения в поддержку</p>
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
                </div>";
                }
            ?>
    </div>
    </div>
</body>
</html>