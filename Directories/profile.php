<?php
session_start();
?>
<html>
<head>
    <title>Document</title>
</head>
    <link rel="stylesheet" href="../CSS/final.css">
<body>
    <?php 
        echo "Welcome " . $_SESSION['email'] ." ". $_SESSION['first_name'] ." ". $_SESSION['last_name'] . " ". $_SESSION['password'];
    ?>
    <table id="my_table">
        <tr>
            <td>UserID</td><td>Password</td>
        </tr>
    </table>
    <script src="../JS/Table_Control.js"></script>
</body>
</html>