<?php 
    include("./model/dbconfig.php");
?>

<?php
function timeAgo($time_ago){

			$time_ago = strtotime($time_ago);
			$cur_time   = time();
			$time_elapsed   = $cur_time - $time_ago;
			$seconds    = $time_elapsed ;
			$minutes    = round($time_elapsed / 60 );
			$hours      = round($time_elapsed / 3600);
			$days       = round($time_elapsed / 86400 );
			$weeks      = round($time_elapsed / 604800);
			$months     = round($time_elapsed / 2600640 );
			$years      = round($time_elapsed / 31207680 );
			// Seconds
			if($seconds <= 60){
			    return "just now";
			}
			//Minutes
			else if($minutes <=60){
			    if($minutes==1){
			        return "one minute ago";
			    }
			    else{
			        return "$minutes minutes ago";
			    }
			}
			//Hours
			else if($hours <=24){
			    if($hours==1){
			        return "an hour ago";
			    }else{
			        return "$hours hrs ago";
			    }
			}
			//Days
			else if($days <= 7){
			    if($days==1){
			        return "yesterday";
			    }else{
			        return "$days days ago";
			    }
			}
			//Weeks
			else if($weeks <= 4.3){
			    if($weeks==1){
			        return "a week ago";
			    }else{
			        return "$weeks weeks ago";
			    }
			}
			//Months
			else if($months <=12){
			    if($months==1){
			        return "a month ago";
			    }else{
			        return "$months months ago";
			    }
			}
			//Years
			else{
			    if($years==1){
			        return "one year ago";
			    }else{
			        return "$years years ago";
			    }
			}
		} 
?>
<?php 
  if(isset($_POST["btn-login"]))
  {
      $email=$_POST["txt_uname_email"];
      $pass=$_POST["txt_password"];
      
      $sql=mysqli_query($con,"select * from registration where email='$email' and password='$pass'");
      if(mysqli_num_rows($sql))
      {
          while($row=mysqli_fetch_array($sql))
          {   
              $name=$row["name"];
              $id=$row["usr_id"];
              session_start();
              $_SESSION["name"]=$name;
              $_SESSION["id"]=$id;
              $_SESSION["email"]=$email;
              
          }
        header("location: ./view/user.php");
      }
      else{
         //$error="";
         echo '<script>alert("plz enter valid password");</script>';


      }

  }

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
   
      
    $path="./view/user_images/".$pic;
	$icon="warning";
	$class="danger";
	
	if($uname=="")	{
		$error[] = "provide username !";	
	}
	else if($type=="application/pdf" || $type=="application/pdf" || $type=="application/x-zip-compressed")	{
		$error[] = "this type of file does not supported !";
		echo '<script>alert("this type of file does not supported !");</script>';	
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

	else
	{
		//$sql="insert into registration values();"
		$sql= mysqli_query($con,"insert into registration(name,email,image,password) values('$uname','$umail','$pic','$upass')");
		if($sql)
		{  
            move_uploaded_file($tmp,$path);
		   $error[] = "Registration successfully for login click on sign button";
		   echo '<script>alert("Registration successfully for login click on sign button");</script>';
		   $icon="success";
	       $class="success";	
		}
	}	
}

?>