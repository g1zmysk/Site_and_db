<?php
require_once 'connect.php';
error_reporting(-1);
  if (isset($_GET['red_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы
    $sql = mysqli_query($connect, "UPDATE `support` SET `status_req` = 'Решено' WHERE `id_req` = {$_GET['red_id']}");
    echo "<script>window.location.href='admin.php'</script>";
    if ($sql) {
      echo "<p>Запись удалена.</p>";
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
    }
  }
  if (isset($_GET['red2_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы
    $sql = mysqli_query($connect, "UPDATE `support` SET `status_req` = 'Отклонено' WHERE `id_req` = {$_GET['red2_id']}");
    echo "<script>window.location.href='admin.php'</script>";
    if ($sql) {
      echo "<p>Запись удалена.</p>";
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
    }
  }
?>