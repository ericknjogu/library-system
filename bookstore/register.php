<?php
session_start();

?>
<?php
include("db_conection.php");
if(isset($_POST['submit']))
{
$user_email = $_POST['email'];
$user_password = $_POST['password'];
$user_firstname = $_POST['firstname'];
$user_lastname = $_POST['lastname'];
$user_address = $_POST['address'];



$check_user="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($conn,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Customer is already exist, Please try another one!')</script>";
 echo"<script>window.open('userregister.php','_self')</script>";
exit();
    }
 
$saveaccount="insert into users (user_email,user_password,user_firstname,user_lastname,user_address) VALUE ('$user_email','$user_password','$user_firstname','$user_lastname','$user_address')";
mysqli_query($conn,$saveaccount);
echo "<script>alert('Data successfully saved, You may now login!')</script>";				
echo "<script>window.open('userlogin.php','_self')</script>";


				
	
			
		
	
		

}

?>
