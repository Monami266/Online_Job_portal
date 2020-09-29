<?php 
    // include("../model/dbconfig.php");
?>
<?php 
  //  session_start();
  //  if(!($_SESSION['name']==''))
  //  {
  //   header('location:user.php');
  //  }


?>
<?php 
  if(isset($_POST["btn-login"]))
  {
      $email=$_POST["txt_uname_email"];
      $pass=$_POST["txt_password"];
      
      // $sql=mysqli_query($con,"select * from registration where email='$email' and password='$pass'");
      if(true)
      // if(mysqli_num_rows($sql))
      {
          $row = array(
            'name' => 'Rahul',
            'usr_id' => 1,
          );
          $result = true;
          while($result)
          {   
              $name=$row["name"];
              $id=$row["usr_id"];
              // session_start();
              // $_SESSION["name"]=$name;
              // $_SESSION["id"]=$id;
              // $_SESSION["email"]=$email;
              $result=false;
          }
        // header("location:user.php");
        return true;
      }
      else{
         $error="plz inter valid password";
      }

  }
  return false;
?>
