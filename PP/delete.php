<?php
require_once 'connect.php';
error_reporting(-1);
  if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы
    $sql = mysqli_query($connect, "DELETE FROM `app` WHERE `id_add` = {$_GET['del_id']}");
    echo "<script>window.location.href='admin.php'</script>";
    if ($sql) {
      echo "<p>Запись удалена.</p>";
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
    }
  }
?>