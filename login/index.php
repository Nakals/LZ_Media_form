<?php
if((isset($_POST['username']) && !empty($_POST['username'])) && 
(isset($_POST['password']) && !empty($_POST['password']))){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ($username === 'test' && $password === '123456') {
        echo '<p class="success">Вы успешно залогинились!</p>';
    } else {
        echo '<p class="error">Неверные данные!</p>';
    }
}
?>