 				 <?php 

                require 'connection.php';
                session_start();

                $mail = $_SESSION["Email"];
                $password = $_SESSION["Password"];

                	if(isset($_POST['Submit1'])){
                		$target = "images/".basename($_FILES['profilePIC']['name']);

                		$image = $_FILES['profilePIC']['name'];

                		$sql = "UPDATE passenger SET proPIC = '$image' WHERE  email  = '$mail' AND password = '$password'"; 
                		$result = mysqli_query($conn,$sql);
 
    					if($result){
    							if(move_uploaded_file($_FILES['profilePIC']['tmp_name'], $target)){
    									echo "Uploaded successfully";
    									header("Location: myaccount.php"); 
    							}
    					}

                	}

                ?>