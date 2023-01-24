<?php
if((isset($_POST['username']) && !empty($_POST['username'])) && 
(isset($_POST['password']) && !empty($_POST['password']))){
    $username = test_input(htmlspecialchars(trim($_POST['username'])));
    $password = trim($_POST['password']);
    if((preg_match("/^[a-zA-Z-' ]*$/",$username))){
        if ($username === 'test' && $password === '123456') {
            echo '<p class="success">Вы успешно залогинились!</p>';
        } else {
            echo '<p class="error">Неверные данные!</p>';
        }
    }
}
?>