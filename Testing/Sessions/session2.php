<?php
session_start();
if(isset($_SESSION["name"]) && isset($_SESSION["age"]))
{
    echo("logged in");
    echo("your name = " .$_SESSION["name"] );
    echo("your age = " . $_SESSION["age"]);
}
else
{
    echo("Please Log in");
}
?>