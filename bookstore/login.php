<?php
session_start();

?>
<?php

include("db_conection.php");



if(isset($_POST['submit']))
{
    $user_email=$_POST['email'];
    $user_password=$_POST['password'];
    

    $check_user="select * from users WHERE user_email='$user_email' AND user_password='$user_password'";

 
    $run=mysqli_query($conn,$check_user);

    if(mysqli_num_rows($run))
    {
     echo "<script>alert('You're successfully logged in!')</script>";
       
 echo "<script>window.open('index.php','_self')</script>";
       
$_SESSION['email']=$user_email;



    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
          echo "<script>window.open('userlogin.php','_self')</script>";
        
         exit();
        
    }
}
?>