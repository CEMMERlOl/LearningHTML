<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "g968848q_0540", "S13a09sh20a00", "g968848q_0540");
if ($mysqli == false) {
  print("error");
} else {

  $inputValue = $_POST["value"]; //NULL????
  $id = $_SESSION["id"]; //NULL????

  $mysqli->query("UPDATE `Dusers` SET `login`='$inputValue' WHERE `id`='$id'");

  print("entered");
}
?>