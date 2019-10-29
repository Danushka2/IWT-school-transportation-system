<?php 
	require 'connection.php';
	session_start();
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
	<link rel="stylesheet" href= "hPage.css">
    
    
    
	
</head>

<body>

<div class = "container wrap">
		
		<div class="row">
				<div class="col-md-4 row1">
						<h3><a href="index.php"><i>ExPressWay</i></a></h3>
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


								<?php
								if(!isset($_SESSION["userName"]))
								{ ?>
									<i class="fas fa-user"> <a href = "login.php"> Login</a></i> 
								<?php  }
								else if($_SESSION["userName"] == "admin"){ ?>
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
			
		</div><!--row-->

		
			<br><br><br>

		
		<div class="header">
				<div id = "topic" style="font-size:50px;"><b>School Transport service</b></div>
				<div id ="intro">ExPressWay is SriLanka's pioneer web and app based school transport <br> platform that connects users to provide most reliable and affordable<br> transport solutions for  teachers, students, parents, and contractors</div>
		</div><!--header-->

		
		<br><br><br>

		
		<div class = "row marg">
    
				<div class="col-md-6 row4">
						<div class="mid">
								<a href="vehical.php" class="link">Vehicles</a>
								<div id="hideCon1">
								We have more that 100 busses and vans for your service.<br>click here to see the best vehical for your transport
								</div>
						</div><!--mid-->
				</div><!--col-md-6-->
    	
    		
				<div class="col-md-6 row5">
						<div class ="mid">
								<a href="drivers.php" class="link">Drivers</a>
								<div id="hideCon2">
								Our drivers find more than a job, they find a career.<br>click here to see our best drivers and their details
								</div>
						</div><!--mid-->
				</div><!--col-md-6-->
    
		</div><!--row-->
    
	
	
		<div class = "row marg">
    	
				<div class="col-md-6 row6">
						<div class="mid">
								<a href="contact.php" class="link">Contact Us</a>
								<div id="hideCon3">
									You can contact us via facebook,instagram,tweeter,<br>and hotlines.click here to see the details.
								</div>
						</div><!--mid-->
				</div><!--col-md-6-->
    	
       
				<div class="col-md-6 row7">
						<div class = "mid">
								<a href="careers.php" class="link">Careers</a>
								<div id = "hideCon4">
									You will be expected to be an expert at aggressive goal setting and <br>derive weekly productivity improvements and productivity at much higher levels than in most companies
								</div>
						</div><!--mid-->
				</div><!--col-md-6-->
		</div><!--row-->
</div><!--container-->	
</body>

</html>