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
	<link rel="stylesheet" href= "lPage.css">
    
    
	
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
								<i class="fas fa-user"> <a href = "login.php"> Login</a></i> 
						</div><!--row3-->
				</div><!--col-md-4-->
			
		</div><!--row-->
		
		
			<br><br><br><br>
		
		<div class = "row">
				<div class = "col-sm-6 col-md-4 col-md-offset-4">
						<div class = "account-wall">
								<img class = "profile-img" src = "userlog.png" alt = "userPic" width = "150px" height = "150px">
				
								<form class = "form-signin" method="POST">
										<input name="email" type = "text" class = "form-control" placeholder = "Email" required autofocus></input>
										<input name="password" type = "password" class = "form-control" placeholder = "Password" required></input>
										<button  name="signIN" class = "btn btn-lg btn-primary btn-block" type = "submit">Sign in</button>
										<label class = "checkbox pull-left">
								</form>
						</div>
								<a href="reg.php" class="text-center reg">Don't have a account?<br><i>Register Here </i></a>
				</div>
		</div>
		
		
	
		
		
<?php
if(isset($_POST["signIN"]))
{

		$mail = $_POST['email'];
		$password = $_POST['password'];
 

		$is_digit = ctype_digit((string)$mail);
	
		if($is_digit>0){
			if($mail<100){
				$sql = "SELECT * FROM owner WHERE OID = '$mail' AND password = '$password' ";
				$result = mysqli_query($conn,$sql);
 
    			if($result){
    				   $count = mysqli_num_rows($result);

       					if($count == 1){
       						$rows = $result -> fetch_assoc();
							$name = $rows['firstname'];
							$_SESSION["userName"] = "owner";
       						header("Location: admin.php");
       					}
       					else{
       					echo "Invalid username of password!!";
       					}
				}
			}

			else if($mail>99){
				$sql = "SELECT * FROM admin WHERE AID = '$mail' AND password = '$password' ";
				$result = mysqli_query($conn,$sql);
 
    			if($result){
    				   $count = mysqli_num_rows($result);

       					if($count == 1){
       						$rows = $result -> fetch_assoc();
							$name = $rows['firstname'];
							$_SESSION["userName"] = "admin";
       						header("Location: admin.php");
       					}
       					else{
       					echo "Invalid username of password!!";
       					}
    			}
    		}
		}
		else{

				$sql = "SELECT * FROM passenger WHERE email = '$mail' AND password = '$password' ";
				$result = mysqli_query($conn,$sql);
 
    			if($result){
    				   $count = mysqli_num_rows($result);

       					if($count == 1){
       						$rows = $result -> fetch_assoc();
							$name = $rows['firstname'];
							$password = $rows['password'];
							$_SESSION["userName"] = $name;
							$_SESSION["Email"] = $mail;
							$_SESSION["Password"] = $password;
       						header("Location: myaccount.php");
       					}
       					else{
       					echo "Invalid username of password!!";
       					}
    			}  
    	}
}



mysqli_close($conn);	
?>			
	

		
		
		
</div><!--container-->
	
</body>

</html>
		
		
		
		
		
