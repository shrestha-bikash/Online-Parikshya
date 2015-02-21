<?php
	session_start();
	$erors = array();// set an empty array that will contains the errors
	// Check for form submission
	if (isset($_POST['email']) && isset($_POST['password'])) {
		// remove tags and whitespace from the beginning and end of form data
		$_POST = array_map("strip_tags", $_POST);
		$_POST = array_map("trim", $_POST);
 
		// the minimum number of characters
	    if (strlen($_POST['email'])<3) $erors[] = 'Email must contain minimum 3 characters';
		if (strlen($_POST['password'])<6) $erors[] = 'Password must contain minimum 6 characters';
     
		// if no errors ($error array empty)
		if(count($erors)<1) {
			// connect to the "registration"
			$conn = new mysqli('localhost', 'root', '', 'yomari');

			// check connection
			if (mysqli_connect_errno()) {
				exit('Connect failed: '. mysqli_connect_error());
			}
		
			$email = $conn->real_escape_string($_POST['email']);
			$password = sha1($conn->real_escape_string($_POST['password']));
		
			// SELECT sql query
			$sql = "SELECT * FROM `registration` WHERE `email`='$email' && `password`='$password'" ;

			// perform the query and store the result
			$result = $conn->query($sql);

			// if the $result contains at least one row
			if ($result->num_rows > 0){
				// output data of each row from $result
				while($row = $result->fetch_assoc()) {
				//Here, replace with html. take session if you need
					echo '<br /> phoneNumber: '. $row['phoneNo']. ' - UserName: '. $row['userName']. ' - Password: '. $row['password'];
					$_SESSION['userName']=$row['userName'];
				}
				Header('Location:../exam.php');
			}
			else {	
				//Here, replace with html. take session if you need			
				echo 'User Name and password do not match';
				
			}		
		$conn->close();
		}
		
		else{
		   echo implode('<br />', $erors);
		}
	}	
	else{
		echo 'Do fill each row.';
	}

?>