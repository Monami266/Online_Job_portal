<?php 
    include("../controller/sign-up_con.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coding Cage : Sign up</title>
<link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
 <link rel="stylesheet" href="components/bootstrap/dist/css/style.css" />
</head>
<body>

<div class="signin-form">

<div class="container">
    	
        <form method="post" class="form-signin" enctype="multipart/form-data">
            <h2 class="form-signin-heading">Sign up.</h2><hr />
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-<?php echo $class; ?>">
                        <i class="glyphicon glyphicon-<?php echo $icon; ?>-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='../index.php'>login</a> here
                 </div>
                 <?php
			}
			?>
            <div class="form-group">
            <input type="text" class="form-control" name="txt_uname" placeholder="Enter Username" value="<?php if(isset($error)){echo $uname;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="txt_umail" placeholder="Enter E-Mail ID" value="<?php if(isset($error)){echo $umail;}?>" />
            </div>
            <div class="form-group">
            	<input type="password" class="form-control" name="txt_upass" placeholder="Enter Password" />
            </div>
            <div class="form-group">
            	<input type="file"  name="img"  />
            </div>


            <div class="clearfix"></div><hr />
            <div class="form-group">
            	<button type="submit" class="btn btn-primary" name="btn-signup">
                	<i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                </button>
            </div>
            <br />
            <label>have an account ! <a href="reg.php">Sign In</a></label>
        </form>
       </div>
</div>

</div>

</body>
</html>