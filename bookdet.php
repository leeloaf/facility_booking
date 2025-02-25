<?php

$con = mysqli_connect ("localhost", "root", "", "facilitybooking") or die (mysqli_connect_errno($con));

$facility = isset($_POST["facility"]) ? $_POST["facility"] : "";
$date = isset($_POST["date"]) ? $_POST["date"] : "";
$duration = isset($_POST["duration"]) ? $_POST["duration"] : "";
$location = isset($_POST["location"]) ? $_POST["location"] : "";
$quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : "";
$activity = isset($_POST["activity"]) ? $_POST["activity"] : "";


mysqli_query($con, "insert into bookingdetails (facility, date, duration, location, quantity, activity) values ('$facility', '$date', '$duration', '$location', '$quantity', '$activity')") or die(mysqli_error($con));


?>