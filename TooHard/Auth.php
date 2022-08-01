<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "g968848q_0540", "S13a09sh20a00", "g968848q_0540");
if ($mysqli == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}else {
    $email = trim(mb_strtolower($_POST['email']));
    $pass = trim($_POST['pass']);

    $email1 = $mysqli->query("SELECT * FROM `Dusers` WHERE `email` = '$email'");
    $Arrayenter = $email1->fetch_assoc();

    if ($email1->num_rows !== 0) {
        if (password_verify($pass, $Arrayenter["pass"])) {
            print("entered");
            $_SESSION["login"] = $Arrayenter["login"];
            $_SESSION["email"] = $Arrayenter["email"];
        } else { print("wrpass"); }
    } else { print("wremail"); }
}
?>