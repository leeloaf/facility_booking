<?php

$con = mysqli_connect ("localhost", "root", "", "facilitybooking") or die (mysqli_connect_errno($con));

$name = isset($_POST["name"]) ? $_POST["name"] : "";
$matriks = isset($_POST["matriks"]) ? $_POST["matriks"] : "";
$username = isset($_POST["username"]) ? $_POST["username"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";



mysqli_query($con, "insert into register (name, matriks, username, password) values ('$name', '$matriks', '$username', '$password')") or die(mysqli_error($con));


?>