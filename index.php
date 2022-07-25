<?php
session_start();
?>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <link rel="stylesheet" href="CSS/index.css">
    <div id="Signup">
        <form action="ServerSidePHP/Signup.php" method="POST">
            Email : <input type="email" name="email" id="signup_email" placeholder="abc@gmail.com" required> <br>
            First Name : <input type="text" name="first_name" id="signup_first_name" placeholder="Saksham" required> <br>
            Last Name : <input type="text" name="last_name" id="signup_last_name" placeholder="Sahgal" required> <br>
            Password : <input type="password" name="password" id="signup_password" placeholder="******" required> <br>
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>

    <div id="login">
        <form action="ServerSidePHP/Login.php" method="POST">
            Email : <input type="email" name="email" id="login_email" placeholder="abc@gmail.com" required> <br>
            Password : <input type="password" name="password" id="login_password" placeholder="******" required> <br>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
    <button onclick="Enter_Dummy_Data()">Enter Dummy Data </button>
    <script src="JS/script.js"></script>
</body>

</html>