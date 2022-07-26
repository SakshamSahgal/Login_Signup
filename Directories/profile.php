<?php
session_start();
?>
<html>
<head>
    <title>Profile</title>
</head>
    <link rel="stylesheet" href="../CSS/profile.css">
<body>

    <div id="Profile_Pallet" align="Center">
        <div id="Profile_Photo">     
        </div>
        <div id="details">
            <table id="profile_table" >
                <tr> <td align="Center"> Email : </td>  <td align="Center"> <?php  echo $_SESSION['email']; ?></td> </tr>
                <tr> <td align="Center"> First Name : </td>  <td align="Center">  <?php  echo $_SESSION['first_name']; ?></td> </tr>
                <tr> <td align="Center"> Last Name : </td>  <td align="Center"> <?php  echo $_SESSION['last_name']; ?></td> </tr>
            </table>
        </div>
    </div>
    
</body>
</html>