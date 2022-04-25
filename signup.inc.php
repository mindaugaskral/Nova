<?php

if(isset($_POST['submit'])){
    
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $pwdRepeat = $_POST['repeat_password'];

    require_once 'config.php';
    require_once 'functions.inc.php';

    if(emptyInputSingup($name, $email, $pwd, $pwdRepeat) !== false){
        header("location: signup.php?error=emptyinput");
        exit();
    }
    if(invalidName($name) !== false){
        header("location: signup.php?error=invalidname");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: signup.php?error=passworddontmatch");
        exit();
    }
    if(userExists($link, $name, $email) !== false){
        header("location: signup.php?error=usernametaken");
        exit();
    }
    createUser($link, $name, $email, $pwd);
}
else{
    header("location: signup.php");
    exit();
}