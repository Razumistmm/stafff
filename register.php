<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
</head>
<body>
<div class="container mregister">
     <div id="login">
<h1>Регистрация</h1>
<form action="register.php" id="registerform" method="post" name="registerform">
    <p><label for="user_login">Имя:<br>
            <input class="input" id="name" name="name" size="32"  type="text" value=""></label></p>
    <p><label for="user_pass">Фамилия:<br>
            <input class="input" id="surname" name="surname" size="32" type="text" value=""></label></p>
    <p><label for="user_pass">email:<br>
            <input class="input" id="email" name="email" size="20" type="email" value=""></label></p>
    <p><label for="user_pass">Номер телефона:<br>
            <input class="input" id="phone" name="phone" size="10"   type="text" value=""></label></p>
    <p class="submit"><input class="button" id="register" name= "register" type="submit" value="Отправить"></p>
</form>
</div>
</div>
<footer>
    © 2014 <ahref="http://www.1stwebdesigner.com/">1stwebdesigner</a>. Все права защищены.
</footer>
</body>
</html>

<?php

require_once("connection.php");

if(isset($__POST["register"])) {
    if (!empty($__POST['name']) && !empty($__POST['surname']) && !empty($__POST['email']) && !empty($__POST['phone'])) {
        $name = $__POST['name'];
        $surname = $__POST['surname'];
        $email = $__POST['email'];
        $phone = $__POST['phone'];

        //$query = $db->$query("SELECT * FROM staff WHERE name = '".$name."';");
        //$count = $query->rowCount();
        //if ($count == 0) {
        $query = "INSERT INTO staff
(`name`, `surname`, `email`, `phone`)
	VALUES('$name', '$surname', '$email', '$phone');";
        $count = $db->exec($query);
        if ($count !== false) {
            echo "Работник зарегистрирован.";
        } else {

            echo "Ошибка ввода";
            echo "<pre>";
            print_r($db->errorInfo());
            echo "<pre>";
        }
    }
}

?>