<?php 
    include("./controller/index_con.php");
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from www.vasterad.com/themes/workscout/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2017 06:31:38 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="./view/css1/style.css">
<link rel="stylesheet" href="./view/css1/colors/green.css" id="colors">
<link rel="stylesheet" href="./view/bootstrap/css/bootstrap.css" id="colors">


<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->
<header class="transparent sticky-header full-width">
<div class="container">
	<div class="sixteen columns">
	
		<!-- Logo -->
		<div id="logo" style="margin-top:15px">
			<h1><a href="./view/index.php"><font style="font-size:25px; color:white">Help Each Other</font></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a data-toggle = "modal" data-target = "#myModal" id="current">Post</a>
					
				</li>
			</ul>


			<ul class="float-right">
				
				<li><a data-toggle = "modal" data-target = "#signupModal"><i class="fa fa-user" ></i> Sign Up</a></li>
				<li><a data-toggle = "modal" data-target = "#myModal"><i class="fa fa-lock"></i> Log In</a></li>
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Banner
================================================== -->
<div id="banner" class="with-transparent-header parallax background" style="background-image: url(./view/images/banner-home-02.jpg)" data-img-width="2000" data-img-height="1330" data-diff="300">
	<div class="container">
		<div class="sixteen columns">
			
			<div class="search-container">

				
				
				<!-- Announce -->
				<div class="announce">
					We’ve over <strong>15 000</strong> Post offers for you!
				</div>

			</div>

		</div>
	</div>
</div>


<!-- Content
================================================== -->


<!-- Modal for login -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Fill Detail here
            </h4>
         </div>
         <form class="form-signin" method="post" id="login-form">
         
         <div class = "modal-body">
            <input type="email" name="txt_uname_email" placeholder="Enter Your email here" />
         </div>
         <div class = "modal-body">
            <input type="password" name="txt_password" placeholder="Enter Your password" />
         </div>
         
         <div class = "modal-footer">
            
            <input type = "submit" class = "btn btn-primary" name="btn-login" value="LOG IN">
               
            </input>
			<button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
            
        </form>
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->

<!-- Modal for login -->
<div class = "modal fade" id = "signupModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Fill Detail here
            </h4>
            <form method="post" class="form-signin" enctype="multipart/form-data">
         </div>
         <div class = "modal-body">
            Name: <input type="text" name="txt_uname" placeholder="Enter Your name" required/>
         </div>
         
         <div class = "modal-body">
            Email : <input type="email" name="txt_umail" placeholder="Enter Your email here" required/>
         </div>
         <div class = "modal-body">
            Password: <input type="password" name="txt_upass" placeholder="Enter Your password" required/>
         </div>
         <div class = "modal-body">
            Slect Your Photo: <input type="file" name="img" required/>
         </div>
         
         <div class = "modal-footer">
            
            <input type = "submit" class = "btn btn-primary" value="SIGN UP" name="btn-signup">
			 <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
           
		   
            </input>
         </div>
         </form>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->

<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<h1 class="text-center">Newly Posted Job</h1>
	<div class="eleven columns">
	<div class="padding-right">
		
		

		<ul class="job-list full">
			<?php 
           $sql=mysqli_query($con,"select * from posts join registration where posts.usr_id_p=registration.usr_id order by posts.status_time desc limit 1,6");
                             while($row=mysqli_fetch_array($sql))
                               {
                                        $title=$row["status_title"];
                                        $status=$row["status"];
                                        $img=$row["image"];
                                        $name=$row["name"];
                                        $time=$row["name"];
                                        $time_ago=$row["status_time"];
                                      echo '<li><a href="#">';
				                          echo '<img src="./view/user_images/'.$img.'" alt="">';
				                             echo '<div class="job-list-content">';
					                           echo '<h4>'.$title.'</h4>';
					                            
					                           echo '</div>';
					                           echo '<p>'.$status.'sdjgfj kjdsaghfj jhdgshj hjagsda gshads sjagdj</p>';
					                           echo '<div class="job-icons" style="margin-left:100px">';
					                            	echo '<span><i class=""></i><strong>Posted by:<strong> '.$name.'</span>';
						                           echo '<span><i class=""></i> </span><br>';
						                          echo '<span><i class=""></i><font style="color:blue">'.timeAgo($time_ago).'</font></span>';
				                               echo '</div>';
				                                echo '</a>';
				                          echo '<a data-toggle = "modal" data-target = "#myModal" class="btn btn-default" >comment</a>';
				                          echo '<br/><br/>';
			                            echo '</li>';

                               }
           ?>
			
		</ul>
		<div class="clearfix"></div>

		<div class="pagination-container">
			
			
		</div>

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">
          
		<!-- Sort by -->
		<div class="widget">
            
			<img src="./view/images/post_a_job.jpg" height="100px" width="100px"/>


		</div>

		<!-- Location -->
		<div class="widget">
			
			
		</div>

		<!-- Job Type -->
		<div class="widget">
			<h2>Find Jobs & Post Jobs</h2>

			<ul class="checkboxes">
				<li>
					<img src="./view/images/fb-jobs.png" height="100px" width="100px"/>
					
				</li>
				
			</ul>

		</div>

		


	</div>
	<!-- Widgets / End -->


</div>






<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<div id="footer">
	

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2017 by <a href="#">Phptpoint</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="./view/scripts/jquery-2.1.3.min.js"></script>
<script src="./view/scripts/custom.js"></script>
<script src="./view/scripts/jquery.superfish.js"></script>
<script src="./view/scripts/jquery.themepunch.tools.min.js"></script>
<script src="./view/scripts/jquery.themepunch.revolution.min.js"></script>
<script src="./view/scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="./view/scripts/jquery.flexslider-min.js"></script>
<script src="./view/scripts/chosen.jquery.min.js"></script>
<script src="./view/scripts/jquery.magnific-popup.min.js"></script>
<script src="./view/scripts/waypoints.min.js"></script>
<script src="./view/scripts/jquery.counterup.min.js"></script>
<script src="./view/scripts/jquery.jpanelmenu.js"></script>
<script src="./view/scripts/stacktable.js"></script>
<script src="./view/scripts/headroom.min.js"></script>
<script src="./view/bootstrap/jquery-3.2.1.min.js"></script>
<script src="./view/bootstrap/js/bootstrap.min.js"></script>





		
		
			
		
	
		
		
	
	
		
</div>


</body>

<!-- Mirrored from www.vasterad.com/themes/workscout/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2017 06:32:06 GMT -->
</html>