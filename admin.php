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
	<link rel="stylesheet" href= "admin.css">
    
    
	
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

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_destroy();
    header("Location: login.php");
}
$_SESSION['LAST_ACTIVITY'] = time();
		
?>

<h3>Drivers</h3>
			<?php

			$sql = " SELECT * FROM driver ";
			$result = mysqli_query($conn,$sql);

			if($result -> num_rows > 0){     ?>



				<table class = "table table-dark">
				<thead>
					<tr>
		   			<th scope="col">ID</th>
				   	<th scope="col">First name </th>
				   	<th scope="col">Second name</th>
					<th scope="col">NIC</th>
					<th scope="col">Telephone</th>
					<th scope="col">Age</th>
					<th scope="col">Salary</th>
					</tr>
				</thead>
				<tbody>
			<?php
			while($row = $result -> fetch_array()){      ?>
	
					<tr>
					<th scope="row"><?php echo $row['DID']; ?></th>
					<td><?php echo $row['firstname']; ?> </td>
					<td><?php echo $row['secondname']; ?> </td>
					<td><?php echo $row['NIC']; ?> </td>
					<td><?php echo $row['telephone'] ?> </td>
					<td><?php echo $row['age'] ?> </td>
					<td><?php echo $row['salary'] ?> </td>
					<td><a href = "edit_timetable.php?id=<?php echo $row['id'];?>">edit</a></td>
					<td><a href = "delete_id=<?php echo $row['id'];?>">delete</a></td>
					</tr>

			<?php } ?>
			</tbody>
			</table>
			<?php } ?>

<h3>Vehicle</h3>
			<?php

			$sql = " SELECT * FROM vehicle ";
			$result = mysqli_query($conn,$sql);

			if($result -> num_rows > 0){     ?>



				<table class = "table table-dark">
				<thead>
						<tr>
		   				<th scope="col">ID</th>
					   	<th scope="col">Type </th>
					   	<th scope="col">Registation No</th>
						<th scope="col">DRIVER ID</th>
						<th scope="col">A/C</th>
						<th scope="col">Seats</th>
						<th scope="col">Driver ID</th>
						</tr>
				</thead>
				<tbody>
			<?php
			while($row2 = $result -> fetch_array()){      ?>
	
						<tr>
						<th scope="row"><?php echo $row2['VID']; ?></th>
						<td><?php echo $row2['type']; ?> </td>
						<td><?php echo $row2['registation_no']; ?> </td>
						<td><?php echo $row2['driver_id']; ?> </td>
						<td><?php echo $row2['A/C'] ?></td>
						<td><?php echo $row2['seats'] ?></td>
						<td><?php echo $row2['driver_id'] ?></td>
						<td><a href = "edit_timetable.php?id=<?php echo $row['id'];?>">edit</a></td>
						<td><a href = "delete_id=<?php echo $row['id'];?>">delete</a></td>
						</tr>

			<?php } ?>
			</tbody>
			</table>
			<?php } ?>


<h3>Passenger</h3>
			<?php

			$sql = " SELECT * FROM passenger ";
			$result = mysqli_query($conn,$sql);

			if($result -> num_rows > 0){     ?>



				<table class = "table table-dark">
				<thead>
						<tr>
		   				<th scope="col">ID</th>
					   	<th scope="col">First Name </th>
					   	<th scope="col">Second Name</th>
						<th scope="col">Email</th>
						<th scope="col">Type</th>
						<th scope="col">Telephone</th>
						<th scope="col">School</th>
						<th scope="col">Pickup Time</th>
						<th scope="col">Vehicle ID</th>
						</tr>
				</thead>
				<tbody>
			<?php
			while($row3 = $result -> fetch_array()){      ?>
	
						<tr>
						<th scope="row"><?php echo $row3['PID']; ?></th>
						<td><?php echo $row3['firstname']; ?> </td>
						<td><?php echo $row3['secondname']; ?> </td>
						<td><?php echo $row3['email']; ?> </td>
						<td><?php echo $row3['type'] ?></td>
						<td><?php echo $row3['telephone'] ?></td>
						<td><?php echo $row3['school'] ?></td>
						<td><?php echo $row3['pickuptime'] ?></td>
						<td><?php echo $row3['vehicleid'] ?></td>
						<td><a href = "edit_timetable.php?id=<?php echo $row['id'];?>">edit</a></td>
						<td><a href = "delete_id=<?php echo $row['id'];?>">delete</a></td>
						</tr>

			<?php } ?>
			</tbody>
			</table>
			<?php } ?>


		
		
		
</div><!--container-->
	
</body>

</html>
		
	