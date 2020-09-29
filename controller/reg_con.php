<?php 
    include("../model/dbconfig.php");
?>
<?php 
   session_start();
   if(!($_SESSION['name']==''))
   {
    header('location:user.php');
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
        header("location:user.php");
      }
      else{
         $error="plz inter valid password";
      }

  }

?>
