<?php 
    include("../model/dbconfig.php");
    session_start();
?>
<?php 
  if(isset($_POST["submit"]))
  {  
  	 $status_tit=$_POST["status_title"];
     $sta=$_POST["status"];
     $uid=$_SESSION["id"];
     $sql=mysqli_query($con,"insert into posts(usr_id_p,status_title,status,status_image,status_time) 
     	values('$uid','$status_tit','$sta','',now());");
     if($sql)
     {
     	echo '<script>alert("post inserted successfully..");</script>';
     }
  }


?>
<?php
  session_start();
  if($_SESSION['name']=='')
  {
     header('location:reg.php');
  }

 ?>
  <?php
  extract($_POST);
 if(isset($updpass))
 {
 	$em=$_SESSION["email"];
 $pass=md5($op);
 
	$que=mysqli_query($con,"select * from registration where email='$em' and password='$op'");
	$row= mysqli_num_rows($que);

	 if($row)
	 {
		if($np==$cp)
		{
		$npass=md5($np);
		mysqli_query($con,"update registration set password='$np' where email='$em'");
		
		$err="<font color='green'>Password Update Successfully !</font>";
		}
		else
		{
		$err="<font color='red'>New Password and Confirm not matched</font>";
		}
	 }
	 else
	 {
	  $err="<font color='red'>Old Password doesn't match</font>";
	 }
 
 }
 ?>