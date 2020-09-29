<?php 
    // include("../model/dbconfig.php");
    // session_start();
?>
<?php 
  
	
    // if($_SESSION["name"]=="")
    // {
    //     header("location:reg.php");

    // }
    


?>
<?php
 if(isset($_POST["uid"]))
 {
   $com=$_POST["comment"];
   $comenterid=$_POST["comme_id"];
   
   $p_id=$_POST["pid"];
  //  $uid=$_SESSION["id"];
  $uid = 1;
  //  $sql2=mysqli_query($con,"select usr_id_p from posts where post_id='$p_id'");
  $result =true;
  $row = array(
    'usr_id_p' => 1,
  );
   while($result)
   {
      $user=$row["usr_id_p"];
      $result = false;
   }
   
    // $sql= mysqli_query($con,"insert into comments(post_id_c,user_id_c,comment,comment_time) values('$p_id','$uid','$com',now())");
    // $sql1= mysqli_query($con,"insert into notification(pos_id,post_usr,comm_user,comment,status,time) 
    //   values('$p_id','$user','$uid','$com',0,now())");
    $sql = $sql1 = true;
    if($sql && $sql1)
    {
      // header("location:user.php");
      return true;
    }
    return false;
 }   
 

?>