<?php 
    // include("../model/dbconfig.php");
    // session_start();
?>
<?php 
// if($_SESSION['name']=='')
//   {
//      header('location:reg.php');
//   }
?>

<?php 

 	
 	


 if(isset($_GET['pid']))
 {  
 	$ps_id=$_GET['pid'];
 	
 	    // $sql1=mysqli_query($con,"delete from comments where post_id_c='$ps_id'"); 
      //   $sql3=mysqli_query($con,"delete from posts where post_id='$ps_id'");

      $sql3=true;
        
       
      if($sql3)
      {
      // header("location:my_task.php");
      return true;
      }

 }
 return false;

?>