
<?php
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();

   

	if(empty($_POST['firstName'])|| empty($_POST['lastName'])|| empty($_POST['password'])||
	empty($_POST['country'])|| empty($_POST['phoneNum'])|| empty($_POST['gender']) ||empty($_POST['email']))
	{
		$msg[]="one of your field is empty";
	}

	if(strlen($_POST['password']<6))
	{
		$msg[]="please enter atlist 6 digit password";
	}
	if(strlen($_POST['phoneNum'])!=10)
	{
	
		$msg[]="please enter 10 digit number";

	}

	if(!empty($msg))
	{
		echo "<b> errors:</b><br>";
		foreach($msg as $k)
		{
			echo "<li>".$k;
		}
	}
	else
	{
		$link=mysqli_connect("localhost","root","" ,"jobring_web");
		  
 if($link){
    echo "Connected\n";}
		$firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $password=$_POST['password'];
        $country=$_POST['country'];
        $phoneNum=$_POST['phoneNum'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
		$q="insert into employees (ee_fnm,ee_lnm,ee_mobileno,ee_gender,ee_email,ee_pwd,ee_country)
        values ('$firstName','$lastName','$phoneNum','$gender','$email','$password',
        '$country')";
		   
		$ret=mysqli_query($link,$q)or die("wrong query");
		
		  if($ret)
{
	header("location:index.php");
           
  echo "<script>alert('Login Successfully!')</script>";
			echo "<script>window.location='index.php'</script>";
		}else{
			echo "<script>alert('Invalid register!')</script>";
			echo "<script>window.location='register.php'</script>";
		}
		mysqli_close($link);
		
	}
?>
























