<?php
if((isset($_POST['username']) && !empty($_POST['username'])) && 
(isset($_POST['password']) && !empty($_POST['password'])) &&
(isset($_POST['email']) && !empty($_POST['email']))){
    $email = test_input(trim($_POST['email']));
    $username = test_input(htmlspecialchars(trim($_POST['username'])));
    $password = trim($_POST['password']);
    if((preg_match("/^[a-zA-Z-' ]*$/",$username)) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Вы успешно зарегистрировались!<br>';
        echo 'Ваш логин: ' . $password;
    }
    else{
        echo 'Ошибка введенных данных';
    }
}
?>