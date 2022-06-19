<?php
    session_start();
    if(isset($_POST['request_login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email;
        echo $password;
        $_SESSION['login']=$email;
    }
    if(isset($_POST['add_to_cart'])){
        $name = $_POST['add_to_cart'];
        $_SESSION['cart']['name'] = array($name);
        echo $name;
    }
?>