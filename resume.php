<?php
	session_start();
	if(!ISSET($_SESSION['ee_id'])){
		header('location:login.php');
	}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Job Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Job Portal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php"><h3 class="hhh">Job Ring</h3></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">

	        	<li class="dropdown" >
			<?php

			
				require'config.php';
				$query = mysqli_query($conn, "SELECT * FROM `employees` WHERE `ee_id`='$_SESSION[ee_id]'") or die("failed");
				$fetch = mysqli_fetch_array($query);

				echo"<a href='#'>". $fetch['ee_fnm']." " .$fetch['ee_lnm']."</a>"


			//echo "class='dropdown-toggle'". $fetch['ee_fnm']." " .$fetch['ee_lnm'];
 
				//echo $_SESSION['ee_fnm']." ".$_SESSION['ee_lnm'];
			?>
			
	        	</li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
		            <ul class="dropdown-menu">
			            <li><a href="location.html">Contract Jobs</a></li>
			            <li><a href="location.html">Walkin Jobs</a></li>
			            <li><a href="location.html">Jobs by Location</a></li>
			            <li><a href="location.html">Jobs by Function</a></li>
			            <li><a href="location.html">Jobs by Industry</a></li>
			            <li><a href="location.html">Jobs by Company</a></li>
		            </ul>
		        </li>
				<li><a href="login.html">Login</a></li>
		        <li><a href="register.html">Sign UP</a></li>
		        <li><a href="contact.php">Contact</a></li>
		        <li><a href="logout.php">Logout</a></li>
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
			 <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
			 <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Upload Your Resume</h2>
        <div class="search_form1">
		<form enctype="multipart/form-data"
			action="<?php print $_SERVER['PHP_SELF']?>" method="post">			
			  <input type="file" name="pdf_file" 
			    enctype="multipart/form-data"><br>
			  <input type="submit" name="submit" id="submit" class="submit" value="Post your CV">
	        </form>
	    </div>
    </div>
 </div>
</div>

<div class="footer_bottom">	
  <div class="container">
    <div class="col-sm-2">
  		<ul class="f_list2">
			<li><a href="jobs.html">Russia Jobs</a></li>
			<li><a href="jobs.html">Australia Jobs</a></li>
			<li><a href="jobs.html">Srilanka Jobs</a></li>
			<li><a href="jobs.html">Poland Jobs</a></li>
	    </ul>
  	</div>
  	<div class="col-sm-2">
  		<ul class="f_list2">
			<li><a href="jobs.html">New Zealand Jobs</a></li>
			<li><a href="jobs.html">Pakistan Jobs</a></li>
			<li><a href="jobs.html">Srilanka Jobs</a></li>
			<li><a href="jobs.html">Irland Jobs</a></li>
	    </ul>
  	</div>
  	<div class="col-sm-2">
  		<ul class="f_list2">
			<li><a href="jobs.html">Canada Jobs</a></li>
			<li><a href="jobs.html">Germany Jobs</a></li>
			<li><a href="jobs.html">China Jobs</a></li>
			<li><a href="jobs.html">Nepal Jobs</a></li>
	    </ul>
  	</div>
  	<div class="col-sm-6 footer_text">
       <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua"</p>
  	</div>
  	<div class="clearfix"> </div>
	<div class="copy">
		<p>Copyright © 2020 Job Ring <a href="#" target="_blank"></a> </p>
	</div>
  </div>
</div>
</body>
</html>	
<?php
require_once 'config.php';

//define ('SITE_ROOT', realpath(dirname(__FILE__)));


if(isset($_POST['submit']))
{

$allowedExts = array("pdf");
$temp = explode(".", $_FILES["pdf_file"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["pdf_file"]["name"];
move_uploaded_file($_FILES["pdf_file"]["tmp_name"],$_FILES["pdf_file"]["name"]);
$sql=mysqli_query($conn,"UPDATE employees SET ee_resume = '$upload_pdf' WHERE `ee_id`='$_SESSION[ee_id]'");
//UPDATE table SET field = NULL WHERE something = something

if($sql){
	echo "Data Submit Successful";
}
else{
	echo "Data Submit Error!!";
}
}
?>