<?php 
	require 'connection.php';
	session_start();
?>


<?php
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
								<input type="text" name="search" class="form-control" placeholder="Search Drivers & Vehicles">
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
		
		





<h1 class="title">Search results </h1>

		<?php 
		if(isset($_POST['btnsearch']))
		{
			$search = $_POST['search'];
			$sql = " SELECT * FROM driver WHERE DID LIKE '%$search%' OR firstname LIKE '%$search%' OR secondname LIKE '%$search%' OR NIC LIKE '%$search%' ";
			$result = mysqli_query($conn,$sql);

			if($result -> num_rows > 0){     ?>



				<table class = "table table-dark">
				<thead>
					<tr>
		   			<th scope="col">ID</th>
				   	<th scope="col">First name </th>
				   	<th scope="col">Second name</th>
					<th scope="col">NIC</th>
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
					</tr>

			<?php } ?>
			</tbody>
			</table>
			<?php
			}
			else{
				$search2 = $_POST['search'];
				$sql2 = " SELECT * FROM vehicle WHERE VID LIKE '%$search2%' OR type LIKE '%$search2%' OR registation_no LIKE '%$search2%' ";
				$result2 = mysqli_query($conn,$sql2);		

					if($result2 -> num_rows > 0){     ?>

							<table class = "table table-dark">
							<thead>
								<tr>
		   						<th scope="col">ID</th>
							   	<th scope="col">Type </th>
							   	<th scope="col">Registation No</th>
								<th scope="col">DRIVER ID</th>
								<th scope="col">A/C</th>
								<th scope="col">Seats</th>
								</tr>
							</thead>
							<tbody>
						<?php
						while($row2 = $result2 -> fetch_array()){      ?>
	
							<tr>
							<th scope="row"><?php echo $row2['VID']; ?></th>
							<td><?php echo $row2['type']; ?> </td>
							<td><?php echo $row2['registation_no']; ?> </td>
							<td><?php echo $row2['driver_id']; ?> </td>
							<td><?php echo $row2['A/C'] ?></td>
							<td><?php echo $row2['seats'] ?></td>
							</tr>

						<?php } ?>
						</tbody>
						</table>
						<?php
					}
			}
		}
		else{
			echo "Please enter a value to search!";
		}?>
			









		
		
		
		
</div><!--container-->
	
</body>

</html>
