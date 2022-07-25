<?php
session_start();
?>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <link rel="stylesheet" href="CSS/index.css">
    <div id="Enter">
        <div id="Signup" align = "Center"> 
            
            <div id="inner_Div_Signup">
                <h3>SIGN UP</h3>
                <form action="ServerSidePHP/Signup.php" method="POST">
                    <table>
                        <tr>  <td>  Email : </td>  <td> <input type="email" name="email" id="signup_email" placeholder="abc@gmail.com" required>  </td>  </tr>
                        <tr>  <td>  First Name : </td>  <td> <input type="text" name="first_name" id="signup_first_name" placeholder="Saksham" required>  </td>  </tr> 
                        <tr>  <td>  Last Name : </td>  <td> <input type="text" name="last_name" id="signup_last_name" placeholder="Sahgal" required>  </td>  </tr> 
                        <tr>  <td>   Password : </td>  <td> <input type="password" name="password" id="signup_password" placeholder="******" required>  </td>  </tr> 
                        <tr> <td colspan="2" align="Center"> <button type="submit" name="submit">Sign up</button>  </td> </tr>
                    </table>
                </form>
                <button onclick="Enter_Dummy_Data()">Enter Dummy Data </button>
            </div>
            
        </div>

        <div id="login" align = "Center">
        
            <div id="inner_Div_Login">
            <h3>LOGIN</h3>
                <form action="ServerSidePHP/Login.php" method="POST">
                    <table>
                        <tr> <td> Email : </td> <td> <input type="email" name="email" id="login_email" placeholder="abc@gmail.com" required> </td> </tr>
                        <tr> <td> Password : </td> <td> <input type="password" name="password" id="login_password" placeholder="******" required></td> </tr>
                        <tr> <td colspan="2" align="Center">  <button type="submit" name="submit">Login</button> </td> </tr>
                    </table>
                </form>
            
            </div>
            
        </div>
    </div>
    
    
    <script src="JS/script.js"></script>
</body>

</html>