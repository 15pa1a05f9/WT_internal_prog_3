<?php 
include "connect.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "INSERT INTO `tbl_user` ( `user_name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:log.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>sellproperty</title>
            <link rel="stylesheet" href="home.css">
    </head>   
    <body>
        
        <div class="content">
            <div class="disp">
                <h1>Register</h1>
                <form class="form" method="post" action="">
                Name<input type="text" name="name">
                Email<input type="text" name="email">
                Password<input type="password" name="pass">
                Retype Password <input type="text" name="repass">
                <input type="submit" name="sub" value="Click to Submit">
            </form>
            </div> 
         
        </div>
    </body>  
</html>
