<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "user_database");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

//extracting data from the login fields
$email = $_POST['email'];
$password = $_POST['password'];

function Check_email($email, $password, $conn)
{
    $email_querry = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password' ";
    $email_run = mysqli_query($conn, $email_querry);
    if (mysqli_num_rows($email_run) > 0) //Email exists and password matches
        return true;
    else
        return false;
}

if (Check_email($email, $password, $conn))
    header("location: ../final.php");
else
    echo "<p> Either email or password is incorrect </p> <a href='../index.php'>Index Page</a>";
