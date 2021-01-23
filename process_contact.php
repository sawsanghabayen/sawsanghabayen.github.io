<?php

require_once 'config.php';

session_start();
	if(empty($_POST))
{
	exit;
}

if(empty($_POST['nm'])|| empty($_POST['email'])|| empty($_POST['query'])
|| empty($_POST['phone']))
	{
		echo "one of your field is empty";
	}


	if(ISSET($_POST['submit'])){
		$nm=$_POST['nm'];
		$email=$_POST['email'];
		$query=$_POST['query'];
		$phone=$_POST['phone'];



		$q="insert into contact(cont_email,cont_fnm,cont_query,cont_phone)
		   values ('$email','$nm','$query','$phone')";
		   
		mysqli_query($conn,$q)or die("wrong query");
		mysqli_close($conn);
		header("location:contact.php");
	}


		?>