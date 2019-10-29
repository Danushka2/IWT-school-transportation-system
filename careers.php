<?php 
	require 'connection.php';
	session_start();
?>


<?php
if(!isset($_SESSION["userName"])){
	header("Location: login.php");
	}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_destroy();
    header("Location: login.php");
	}	
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
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
	<link rel="stylesheet" href= "carPage.css">
    
    
	
</head>

<body>

<div class = "container flex-container">
		
		<div class="row" id="first">
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

				<br><br>
			
		</div><!--row-->
		
		
	
		
		
		<div class = "bg-img flex-container position-fixed" id="second">		
				<div class = "mid" >
						<br>
						<h1>Career opportunities</h1>
						<br>
				</div><!--mid-->
			

					
				
				
				<div class = "row">
						<div class = "col-md-8">Drivers</div>
						<div class = "col-md-4 apply"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Apply
						</button> </div>
				</div>

				
				
				<div class = "row">
						<div class = "col-md-8">Call center Agent</div>
						<div class = "col-md-4 apply"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Apply
						</button> </div>
				</div>
				
				
				<div class = "row">
						<div class = "col-md-8">Acconuntant</div>
						<div class = "col-md-4 apply"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Apply
						</button> </div>
				</div>	
 
				
				<div class = "row">
						<div class = "col-md-8">Security Guard</div>
						<div class = "col-md-4 apply"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Apply
						</button> </div>
				</div>
				
				<div class = "row">
						<div class = "col-md-8">mechanics</div>
						<div class = "col-md-4 apply"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Apply
						</button> </div>
				</div>
				
				
<script>
	function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height(25%) - $dialog.height(25%)) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});
</script>

            
            <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel" ><b><i style="color:black;">Contact US</i></b></h4>
          		  </div>
           
           		 <div class="modal-body">
                    <h4 style="color:black;">0717695776 or 0112457865</h4>
            	</div>
            	<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            	</div>
            </div>
        </div>
    </div>




				
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
								<p>lorem ipsum door sit amet, consectetur adipisicing elit.Nunc maximus, nulla tu commodo segilits, sapien dul mattls dul,non pulvinar lorem fells mec erat</p>
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