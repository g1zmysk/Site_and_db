<?php
require_once 'connect.php';
session_start();
if(isset($_POST['name']) && isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2']))
{
$name=$_POST['name'];
$login=$_POST['login'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$email=$_POST['email'];
if ($password == $password2){
mysqli_query($connect, "INSERT INTO `users`(`id_user`, `name`, `login`, `password`, `perm`, `email`) VALUES ('','$name','$login','$password','user','$email')");
echo "<script>window.location.href='lk.php'</script>";
}
}
?>