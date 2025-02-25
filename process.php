<?php

$con = mysqli_connect ("localhost", "root", "", "facilitybooking") or die (mysqli_connect_errno($con));

if (isset($_POST["username"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $semak= mysqli_query($con, "select * from register where username='$username' and password='$password'") or die (mysqli_error($con));

    $bilrekod=mysqli_num_rows($semak);

    if ($bilrekod==0)
    {
        echo "Wrong username or password";
    }
    else
    {
        $_SESSION["username"]=$username;
        $datarekod=mysqli_fetch_array($semak);

        if ($datarekod['status']=="USER")
        {
            header ("location: booking.html");
        }
        elseif ($datarekod['status']=="ADMIN")
        {
            header ("location: admin.html");
        }
    }
}
?>