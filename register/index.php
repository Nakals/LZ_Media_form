<?php
if((isset($_POST['username']) && !empty($_POST['username'])) && 
(isset($_POST['password']) && !empty($_POST['password'])) &&
(isset($_POST['email']) && !empty($_POST['email']))){
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    echo 'Вы успешно зарегистрировались!<br>';
    echo 'Ваш логин: ' . $password;
}
?>