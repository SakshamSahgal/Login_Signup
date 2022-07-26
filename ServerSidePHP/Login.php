<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','user_database');

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

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

function get_fname_from_db($email,$password,$conn)
{
    $fname_query = "SELECT First_Name FROM users WHERE Email = '$email' AND Password = '$password' ";
    $fname_run = mysqli_query($conn,$fname_query);
    $fname = mysqli_fetch_array($fname_run);
    return $fname[0];
}

function get_lname_from_db($email,$password,$conn)
{
    $lname_query = "SELECT Last_Name FROM users WHERE Email = '$email' AND Password = '$password' ";
    $lname_run = mysqli_query($conn,$lname_query);
    $lname = mysqli_fetch_array($lname_run);
    return $lname[0];
}

if (Check_email($email, $password, $conn)) //success
{
  session_start();
  $_SESSION['email'] = $email;
  $_SESSION['first_name'] = get_fname_from_db($email,$password,$conn);
  $_SESSION['last_name'] = get_lname_from_db($email,$password,$conn);
  $_SESSION['password'] = $password;
  header("location: ../Directories/profile.php");
}
    
else
    echo "<p> Either email or password is incorrect </p> <a href='../index.php'>Index Page</a>";
