<html>
<head>
    <title>Profile</title>
</head>
    <link rel="stylesheet" href="../CSS/profile.css">
<body>
    <?php 
        session_start();
        //checking if not logged in 
        if(!isset($_SESSION['email']))
            header("location: ../index.php");
    ?>
    <div id="Profile_Pallet" align="Center">
        <div id="Profile_Photo">     
        </div>
        <div id="details">
            <table id="profile_table">
                <tr> <td align="Center"> Email : </td>  <td align="Center"> <?php  echo $_SESSION['email']; ?></td> </tr>
                <tr> <td align="Center"> First Name : </td>  <td align="Center">  <?php  echo $_SESSION['first_name']; ?></td> </tr>
                <tr> <td align="Center"> Last Name : </td>  <td align="Center"> <?php  echo $_SESSION['last_name']; ?></td> </tr>
                <tr> <td colspan="2" align="Center"> 
                    <form action="../ServerSidePHP/Logout.php" method="POST"> 
                    <input type="submit" value="Logout">
                    </form>
                </td></tr>
            </table>
        </div>
    </div>
</body>
</html>