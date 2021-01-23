
<?php
require_once 'config.php';

session_start();
if ( isset( $_FILES['resume'] ) ) {
$allowedExts = array("pdf");
$temp = explode(".", $_FILES["resume"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["resume"]["name"];
move_uploaded_file($_FILES["resume"]["tmp_name"],"uploads/pdf/" . $_FILES["resume"]["name"]);
$sql=mysqli_query($conn,"INSERT INTO `employees`(`ee_resume`)VALUES($upload_pdf')");
if($sql){
  echo "Data Submit Successful";
}
else{
  echo "Data Submit Error!!";
}
}
?> 