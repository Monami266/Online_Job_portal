<?php 
    include("../model/dbconfig.php");
?>
<?php
if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);
	$pic=$_FILES["img"]["name"];
    $tmp=$_FILES["img"]["tmp_name"];
    $type=$_FILES["img"]["type"];
   
      
    $path="user_images/".$pic;
	$icon="warning";
	$class="danger";
	
	if($uname=="")	{
		$error[] = "provide username !";	
	}
	else if($type=="application/pdf" || $type=="application/pdf" || $type=="application/x-zip-compressed")	{
		$error[] = "this type of file does not supported !";	
	}
	else if($pic=="")	{
		$error[] = "Select Image !";	
	}
	else if($umail=="")	{
		$error[] = "provide email id !";	
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}
	else if($upass=="")	{
		$error[] = "provide password !";
	}
	else if(strlen($upass) < 6){
		$error[] = "Password must be atleast 6 characters";	
	}
	else
	{
		//$sql="insert into registration values();"
		$sql= mysqli_query($con,"insert into registration(name,email,image,password) values('$uname','$umail','$pic','$upass')");
		if($sql)
		{  
            move_uploaded_file($tmp,$path);
		   $error[] = "Registration successfully for login click on sign button";
		   $icon="success";
	       $class="success";	
		}
	}	
}

?>