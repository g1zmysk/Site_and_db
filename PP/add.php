<?php
require_once 'connect.php';
session_start();
if (isset($_POST['login']) && isset($_POST['pass']))
{
 $login=$_POST['login'];
$pass=$_POST['pass'];
 $query = "SELECT * FROM `users` WHERE `login`='{$login}' AND `password`='{$pass}' LIMIT 1";
 $sql = mysqli_query($connect,$query) or die(mysqli_error());
 if (mysqli_num_rows($sql) == 1)
{
 $row = mysqli_fetch_assoc($sql);
 $_SESSION['id_user'] = $row['id_user'];
 $_SESSION['perm'] = $row['perm'];
if ($_SESSION['perm']=="admin")
{
echo "<script>window.location.href='admin.php'</script>";
echo 'Вы вошли, как admin '.$_POST['login'].'';
}
if ($_SESSION['perm']=="user")
{
echo "<script>window.location.href='lk.php'</script>";
echo 'Вы вошли, как пользователь '.$_POST['login'].'';
}
}
 else {
 die('Неверное имя пользователя или пароль');
 }
}
?>