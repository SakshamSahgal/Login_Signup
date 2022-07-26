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

//extracting data from the signup fields
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];


function email_exist($email, $conn)
{
  $email_querry = "SELECT * FROM users WHERE Email = '$email' ";
  $email_run = mysqli_query($conn, $email_querry);
  if (mysqli_num_rows($email_run) > 0) //if atleast 1 row with same email then the user is already registered
    return true;
  else
    return false;
}

function insert_data($conn, $email, $first_name, $last_name, $password)
{
  //feeding that data into database
  $insert_into_database_querry = "INSERT INTO users VALUES ('$email' , '$first_name' , '$last_name' , '$password' );";
  mysqli_query($conn, $insert_into_database_querry);

  //setting session 
  session_start();
  $_SESSION['email'] = $email;
  $_SESSION['first_name'] = $first_name;
  $_SESSION['last_name'] = $last_name;
  $_SESSION['password'] = $password;
}


if (email_exist($email,$conn)) {
  header("location: ../Directories/already_exist.php");
} else {
  insert_data($conn, $email, $first_name, $last_name, $password);
  //Login Success , Proceeding to the next page
  header("location: ../Directories/profile.php");
}
