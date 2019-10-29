<?php 
	require 'connection.php';
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
	<link rel="stylesheet" href= "rPage.css">
    
    
	
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

		<h2 class = "header">Registration-Form</h2>
		
<form name="regForm" onsubmit="return formValidation()" method="post">
			
		<div class = "row">
				<div class = "col-md-6">
						<div class="row">
								<div class="col-sm-4">
										<label class="firstname">First Name :</label>
								</div>
								<div class="col-sm-8">
										<input type="text" name="firstname" id="firstnameid" placeholder="Enter your First Name" class="form-control ">
								</div>
						</div><!--row-->
						
						<div class="row">
								<div class="col-sm-4">
										<label class="secondname">Second Name :</label>
								</div>
								<div class="col-sm-8">
										<input type="text" name="secondname" id="secondnameid" placeholder="Enter your Second Name" class="form-control ">
								</div>
						</div><!--row-->

						<div class="row">
								<div class="col-sm-4">
										<label class="mail" >Email :</label>
								</div>
								<div class="col-sm-8"	>	 
										<input type="email" name="email"  id="emailid"placeholder="Enter your email" class="form-control ">
								</div>
						</div>
										
						<div class="row">
								<div class="col-sm-4">
										<label class="pass">Password :</label>
								</div>
								<div class="col-sm-8">
										<input type="password" name="password" id="passwordid" placeholder="Enter your Password" class="form-control ">
								</div>
						</div><!--row-->
						
						<div class="row">
								<div class="col-sm-4">
										<label class="cpass">Conform Password :</label>
								</div>
								<div class="col-sm-8">
										<input type="password" name="cpassword" id="cpasswordid" placeholder="Conform Password" class="form-control">
								</div>
						</div><!--row-->
						
						
						<div class = "row">
								<div class="col-sm-4">
										<label class="genderclass">Gender :</label>
								</div>						

								<div class="col-sm-4 male">	 
										<input type="radio" name="gender"  id="genderb" value="male" checked>Male</input>
								</div>
							 
								<div class="col-sm-4 female">
										<input type="radio"  name="gender" id="genderf" value="female" >Female</input>
								</div>
						</div><!--row-->
						
						
						
						<div class="row">
								<div class="col-sm-4">
										<label class="school">School :</label>
								</div>
								<div class="col-sm-8">
										<input type="text" name="school" id="schoolid" placeholder="Enter the School" class="form-control ">
								</div>
						</div><!--row-->
	
						<div class="row">
								<div class="col-sm-4">
										<label class="address">Address :</label>
								</div>
								<div class="col-sm-8">
										<textarea name="address" id="addressid" placeholder="Enter the Address" class="form-control "></textarea>
								</div>
						</div><!--row-->	
						
						<div class = "row">
								<div class = "col-sm-4">
										<label class = "typeclass">Customer type :</label>
								</div>
								<div class = "col-sm-8">
										<input type="radio" name="type" id = "type1" value="student" checked> Student<br>
										<input type="radio" name="type" id = "type2" value="teacher"> Teacher<br>
										<input type="radio" name="type" id = "type3" value="parent"> Parent<br>
										<input type="radio" name="type" id = "type5" value="contractor"> Contractor<br>
								</div>
						</div>		
				</div><!--col-md-6-->
					 
				<div class = "col-md-6">	

						<div class="row">
								<div class="col-sm-4">
										<label class="age">Age :</label>
								</div>
								<div class="col-sm-8">
										<input type="text" name="age" id="ageid" placeholder="Enter the age/birthday" class="form-control ">
								</div>
						</div><!--row-->


						<div class="row">
								<div class="col-sm-4">
										<label class="contact">Contact :</label>
								</div>
								<div class="col-sm-8">
										<input type="text" name="contact" id="contactid" placeholder="Enter the telephone Number" class="form-control ">
								</div>
						</div><!--row-->


							
						<div class="row">
								<div class="col-sm-4">
										<?php 
        
 										$sqlD = "SELECT * FROM driver";
 										$resultD = mysqli_query($conn,$sqlD);
    
 										if ($resultD->num_rows > 0){
										?>

										<label class="driver">Drivers :</label>
								</div>
								<div class="col-sm-8">
										<select name="driver" style="color:black;width:50%;height:30px;">
	
										<?php 
										while($rowD = $resultD->fetch_assoc()){
										?>

										<option style="color:black;" value=" <?php echo $rowD['DID'] ?> "> <?php echo $rowD['firstname'] ?>  </option>

										<?php }?>

										</select>

										<?php } ?>
										
								</div>

						</div><!--row-->

						<div class = "row">
								<div class="col-sm-4">
										<?php 
        
 										$sqlV = "SELECT * FROM vehicle";
 										$resultV = mysqli_query($conn,$sqlV);
    
 										if ($resultV->num_rows > 0){
										?>

										<label class="vehicle">Vehicle ID :</label>
								</div>
								<div class="col-sm-8">
										<select name="vehicle" style="color:black;width:50%;height:30px;">
	
										<?php 
										while($rowV = $resultV->fetch_assoc()){
										?>

										<option style="color:black;" value=" <?php echo $rowV['VID'] ?> "> <?php echo $rowV['VID'] ?>  </option>

										<?php }?>

										</select>

										<?php } ?>	
								</div>							
						</div><!--row-->
							
						<div class = "row">
								<div class="col-sm-4">
										<label class="vehitype">Vehicle Type :</label>
								</div>						

								<div class="col-sm-4 bus">	 
										<input type="radio" name="vtype"  id="vehitypeb" value="bus">Bus</input>
								</div>
							 
								<div class="col-sm-4 van">
										<input type="radio"  name="vtype" id="vehitypev" value="van" checked>Van</input>
								</div>
						</div><!--row-->
					
						<div class = "row">
								<div class="col-sm-4">
										<label class="air">Air condition :</label>
								</div>						

								<div class="col-sm-4 with">	 
										<input type="radio" name="ac"  id="airY" value="yes" checked>with A/C</input>
								</div>
							 
								<div class="col-sm-4 without">
										<input type="radio"  name="ac" id="airN" value="no" >without A/C</input>
								</div>
						</div><!--row-->
						
						<div class="row">
								<div class="col-sm-4">
										<label class="date">Starting date :</label>
								</div>
								<div class="col-sm-8">
										<input type="text" name="date" id="dateid" placeholder="DD/MM/YY" class="form-control ">
								</div>
						</div><!--row-->
						
						<div class="row">
								<div class="col-sm-4">
										<label class="time">Pickup Time :</label>
								</div>
								<div class="col-sm-8">
										<input type="text" name="time" id="timeid" placeholder="HH:MM" class="form-control ">
								</div>
						</div><!--row-->
						
						<div class="row">
								<div class="col-sm-4">
										<label class="km">Kilometers to destination :</label>
								</div>
								<div class="col-sm-8">
										<input type="text" name="km" id="kmid" placeholder="KiloMeters" class="form-control ">
								</div>
						</div><!--row-->
						
						<div class = "col-sm-12">
								<button id = "submit" type="submit" name="btnSubmit">Submit to Registration</button>
						</div>
						
				</div><!--col-md--->	 
		</div><!--row-->
			
		
		
</form>		
		
		
		
<script src = "rPage.js"></script>		
		
		

<?php
if(isset($_POST["btnSubmit"]))
{

  $firstname = $_POST['firstname'];
  $secondname = $_POST['secondname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $school = $_POST['school'];  
  $address = $_POST['address'];
  $type = $_POST['type'];
  $age = $_POST['age'];
  $contact = $_POST['contact'];
  $driver = $_POST['driver'];
  $vehicle = $_POST['vehicle'];
  $vtype = $_POST['vtype'];
  $ac = $_POST['ac'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $km = $_POST['km'];


  if($ac == "yes"){
  	$monthlyFee = ($km * 500) * (1.1);
  }
  else{
  	$monthlyFee = ($km * 500);
  }




//TODO Complete sql query (same line)
  $sql = "INSERT INTO passenger ( firstname , secondname, email, password, gender, school, address, type, age, telephone, driverid, vehicleid, vehicletype,ac, startingdate, pickuptime,kmToSchool, monthlyfee )	VALUES ('$firstname', '$secondname','$email', '$password','$gender', '$school','$address', '$type','$age', '$contact','$driver', '$vehicle','$vtype', '$ac','$date', '$time', '$km', '$monthlyFee')";
  
  //TODO the insertion 
    if(mysqli_query($conn, $sql)){
      echo "Inserted successfully";
    }
    else{
      echo "Error:". $conn->error;
    }
}







mysqli_close($conn);	
?>			
		
		
		
		
</div><!--container-->
	
</body>

</html>
		
		
					
		