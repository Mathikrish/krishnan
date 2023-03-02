<?php
    $connect= mysqli_connect("localhost","root","","login");
	if(isset($_GET['submit']))
	{

	$emaill= $_GET['username'];
	$pass = $_GET['password'];
	$query = "INSERT INTO account( email, password) values ('$emaill','$pass')";
	$result=mysqli_query($connect,$query);
	if($result)
	{
		echo 'Inserted';
	}
	else
	{
        echo 'Not inserted';
	}	
	}
?>
