<?php 
	require 'connection.php';
	session_start();
?>


<?php
if(!isset($_SESSION["userName"]))
{
header("Location: login.php");
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_destroy(); 
    header("Location: login.php");
}
$_SESSION['LAST_ACTIVITY'] = time();
?>



<!DOCTYPE html>
<html>
<head>
<title>ExPressWay</title>

<link rel="icon" href="school_bus-512 (1).png" type="image/x-icon"/>
	
	<meta charset="utf-8">
	<meta name = "ExPressWay" content = "online transport service">
	<meta name = "keywords" content = "school,trip,transport">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href= "dPage.css">
    
    
	
</head>

<body>

<div class = "container">
		
			<div class="row">
					<div class="col-md-4 row1">
							<h3><a href="index.php"><i class="fas fa-home back" id="logoName">  <i>ExPressWay</i></i></a></h3>
					</div><!--col-md-4-->
    
	
					<div class="col-md-4" >
					<form method="POST" action="search.php">
						<div class="input-group row2">
								<span class="input-group-btn">
										<button class="btn btn-default" name="btnsearch" type="submit">Search</button>
								</span>
								<input type="text" class="form-control" name="search" placeholder="Search Drivers & Vehicles">
						</div><!-- /input-group -->
					</form>
					</div><!--col-md-4-->

					
					<div class ="col-md-4">
							<div class ="row3">
								<?php if($_SESSION["userName"] == "admin"){ ?>
									<i class="fas fa-user"> <a href = "admin.php"><?php echo $_SESSION['userName']; ?></a></i>
								<a href="logout.php"><i>log out</i></a>
								<?php }  
								else if($_SESSION["userName"] == "owner"){ ?>
									<i class="fas fa-user"> <a href = "admin.php"><?php echo $_SESSION['userName']; ?></a></i>
								<a href="logout.php"><i>log out</i></a>
								<?php } 				
								else{ ?>
									<i class="fas fa-user"> <a href = "myaccount.php"><?php echo $_SESSION['userName']; ?></a></i>
								<a href="logout.php"><i>log out</i></a> 
								<?php } ?>
							</div><!--row3-->
					</div><!--col-md-4-->
					
					<br>

			</div><!--row-->
		
		
		
		<div class = "bg-img">
				<div class = "row">
						<div class = "col-md-6">
								<div id = "jet">
										<h1>Top Performance</h1>
							
												<br>

										<div class="slideshow-container"><!--start of slideshow-->
												<div class="mySlides fade">
														<img src="top/d1 (1).png" style="width:300px;height:300px;border-radius:20px;">
												</div>
												<div class="mySlides fade">
														<img src="top/d1 (2).png" style="width:300px;height:300px;border-radius:20px;">
												</div>
												<div class="mySlides fade">
														<img src="top/d1 (3).png" style="width:300px;height:300px;border-radius:20px;">
												</div>
												<div class="mySlides fade">
														<img src="top/d1 (4).png" style="width:300px;height:300px;border-radius:20px;">
												</div>
												<div class="mySlides fade">
														<img src="top/d1 (5).png" style="width:300px;height:300px;border-radius:20px;">
												</div>
										</div><!--end of slideshow-->
								
											

										<div id = "dotId" style="text-align:center">
													<span class="dot"></span> 
													<span class="dot"></span> 
													<span class="dot"></span> 
													<span class="dot"></span> 
													<span class="dot"></span> 
												</div>
										<script src="dPage.js"></script><!--add external javascript sheet-->
										
										<br/><br/>

								</div><!--jet-->
					
						</div><!--col-md-6-->
				
						<div class = "col-md-6">
								<div class = "drive">
										<h2>Drivers</h2><br>
										<div class = "vehi">						
												<img src = "drivers/1 (1).jpg" alt = "driver" width = "140px" height="130px">
												<img src = "drivers/1 (2).jpg" alt = "driver" width = "140px" height="130px">
												<img src = "drivers/1 (3).jpg" alt = "driver" width = "140px" height="130px">
												<img src = "drivers/1 (4).jpg" alt = "driver" width = "140px" height="130px">
												<img src = "drivers/1 (5).jpg" alt = "driver" width = "140px" height="130px">
												<img src = "drivers/1 (6).jpg" alt = "driver" width = "140px" height="130px">
												<img src = "drivers/1 (7).jpg" alt = "driver" width = "140px" height="130px">
												<img src = "drivers/1 (8).jpg" alt = "driver" width = "140px" height="130px">
												<img src = "drivers/1 (9).jpg" alt = "driver" width = "140px" height="130px">
										</div><!--vehi-->
								</div><!--driver-->
						</div><!--col-md-6-->		
				</div><!--row-->
				
				
				<footer>
						<div id = "payment">
								<p>Payment Method<br></p>	
			
								<ul>
									<li><i class="fab fa-cc-visa"></i></li>
									<li><i class="fab fa-cc-paypal"></i></li>
									<li><i class="fab fa-cc-mastercard"></i></li>
									<li><i class="fab fa-cc-amex"></i></li>
								</ul>
						</div><!--payment-->
		
		
		
						<div id = "about">
								<h2>About Us</h2>
								<p>lorem ipsum door sit amet, consectetur adipisicing elit.Nunc maximus, nulla tu commodo segilitst</p>
						</div><!--about-->
						
						
						<div id="last">
								<div id = "social">
										<ul>
												<li><i class="fab fa-twitter-square"></i></li>
												<li><i class="fab fa-facebook-square"></i></li>
												<li><i class="fab fa-instagram"></i></li>
												<li><i class="fab fa-google-plus-square"></i></li>
										</ul>
								</div><!--social-->
				
								<div id="rate">
										<ul>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
										</ul>
								</div> <!--rate-->
						</div><!--last-->
		
				</footer>
		</div><!--bg-img-->
</div><!--container-->
	
</body>

</html>