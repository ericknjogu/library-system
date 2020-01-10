<?php


$conn = mysqli_connect("localhost", "root", "", "bookstore");
		if(!$conn){
			echo "Can't connect database ". mysqli_connect_error($conn);
			exit;
		}
		return $conn;


?>