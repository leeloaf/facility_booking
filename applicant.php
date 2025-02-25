<?php

$con = mysqli_connect ("localhost", "root", "", "facilitybooking") or die (mysqli_connect_errno($con));

$name = isset($_POST["name"]) ? $_POST["name"] : "";
$phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
$faculty = isset($_POST["faculty"]) ? $_POST["faculty"] : "";
$matriks = isset($_POST["matriks"]) ? $_POST["matriks"] : "";
$position = isset($_POST["position"]) ? $_POST["position"] : "";
$applicant = isset($_POST["applicant"]) ? $_POST["applicant"] : "";
$image = isset($_POST["image"]) ? $_POST["image"] : "";

mysqli_query($con, "insert into applicantdetails (name, phone, faculty, matriks, position, applicant, image) values ('$name', '$phone', '$faculty', '$matriks', '$position', '$applicant', '$image')") or die(mysqli_error($con));


?>