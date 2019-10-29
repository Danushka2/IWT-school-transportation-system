<?php 
	require 'connection.php';
	session_start();
?>


<?php
if(!isset($_SESSION["userName"]))
{
header("Location: login.php");
}
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
	<link rel="stylesheet" href= "myaccount.css">
    
    
	
</head>

<body>

<div class = "container flex-container">
		
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
								<i class="fas fa-user"> <a href = "myaccount.php"><?php echo $_SESSION['userName']; ?></a></i>
								<a href="logout.php"><i>log out</i></a> 
						</div><!--row3-->
				</div><!--col-md-4-->
			
		</div><!--row-->
		
		
<?php 
	$mail = $_SESSION["Email"];
	$password = $_SESSION["Password"];


if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_destroy();
    header("Location: login.php");
}
$_SESSION['LAST_ACTIVITY'] = time();



				$sql = "SELECT * FROM passenger WHERE email  = '$mail' AND password = '$password' ";
				$result = mysqli_query($conn,$sql);

       						$rows = $result -> fetch_assoc();
							$name = $rows['firstname'];
	
?>
		
<h2 id="acc">My Account</h2>


        <div class="row">
                <div class="col-md-4">
                	<form method="post" action = "profile.php" enctype = "multipart/form-data">
                        
                        	<?php 
                        		$pic = $rows['proPIC'];
                        			if($pic){ ?>
                        				<div class="profile-img">
                        				<img src="images/<?php echo $pic ; ?>" >
                        				</div>
                        	<?php	}	else{ ?>
                        				<div class="profile-img">
                        				<img src="images/default.jpg" >
                        				</div>
                        	<?php		} ?>

                                <input type="file" name="profilePIC" value="Change Photo">
                        <input type="submit" value="Upload Image" name="Submit1">
        			</form> 
                </div>

              <div class="col-md-8">
                        <div class="row">
                                <div class="col-md-4">
                                        <label>Name</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['firstname']." ".$rows['secondname'] ?> </p>
                                </div>
                                <div class="col-md-4">
                                
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                        <label>Type</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['type'] ?></p>
                                </div>
                                <div class="col-md-4">
                                
                                </div>                               
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                        <label>Age/Birthday</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['age'] ?></p>
                                </div>
                                <div class="col-md-4">
                                
                                </div>                                
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                        <label>gender</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['gender'] ?></p>
                                </div>
                                <div class="col-md-4">
                                 
                                </div>                                
                        </div>                        
                        <div class="row">
                                <div class="col-md-4">
                                        <label>Email</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['email'] ?></p>
                                </div>
                                <div class="col-md-4">
                                        <a href = "#">edit</a>
                                </div>                                
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                        <label>Phone</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['telephone'] ?></p>
                                </div>
                                <div class="col-md-4">
                                        <a href = "#">edit</a>
                                </div>                                
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                        <label>School</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['school'] ?></p>
                                </div>
                                <div class="col-md-4">
                                        <a href = "#">edit</a>
                                </div>                                
                        </div>

                        <div class="row">
                                <div class="col-md-4">
                                        <label>PickUp Time</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['pickuptime'] ?></p>
                                </div>
                                <div class="col-md-4">
                                        <a href = "#">edit</a>
                                </div>                                
                        </div>

                        <div class="row">
                                <div class="col-md-4">
                                        <label>Address</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['address'] ?></p>
                                </div>
                                <div class="col-md-4">
                                        <a href = "#">edit</a>
                                </div>                                
                        </div>

                        <div class="row">
                                <div class="col-md-4">
                                        <label>km to school</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['kmToSchool'] ?></p>
                                </div>
                                <div class="col-md-4">
                                        <a href = "#">edit</a>
                                </div>                                
                        </div>

                        <div class="row">
                                <div class="col-md-4">
                                        <label>Monthly Fee</label>
                                </div>
                                <div class="col-md-4">
                                        <p><?php echo $rows['monthlyfee'] ?></p>
                                </div>
                                <div class="col-md-4">
                                        <a href = "#">PAY</a>
                                </div>                                
                        </div>

                        <div class="row">
                                <div class="col-md-12">
                                	<a href = "#">Change your password</a>
                                </div>
                        </div>


                </div>
        </div>

          
      


	
		
</div><!--container-->
	
</body>

</html>


