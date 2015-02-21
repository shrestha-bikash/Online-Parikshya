 <?php
	$erors = array();// set an empty array that will contains the errors
	$regexp_mail = '/^([a-zA-Z0-9]+[a-zA-Z0-9._%-]*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4})$/'; // an e-mail address pattern

	// Check for form submission
	if (isset($_POST['orgName']) && isset($_POST['email'])&& isset($_POST['phoneNo']) && isset($_POST['pass']) && isset($_POST['cPass'])) {
		// remove tags and whitespace from the beginning and end of form data
		$_POST = array_map("strip_tags", $_POST);
		$_POST = array_map("trim", $_POST);
		
		// check if all form fields are filled in correctly
		// the minimum number of characters
		if (strlen($_POST['orgName'])<3) $erors[] = 'Organization Name must contain minimum 3 characters';
		if (!preg_match($regexp_mail, $_POST['email'])) $erors[] = 'Invalid e-mail address';
		if (strlen($_POST['phoneNo'])<6) $erors[] = 'Phone Number must contain minimum 6 characters';
		if (strlen($_POST['pass'])<6) $erors[] = 'Password must contain minimum 6 characters';
		if (strlen($_POST['cPass'])<6) $erors[] = 'Password must contain minimum 6 characters';
		
		
		if ($_POST['password']==$_POST['confirmPassword']){		
				// if no errors ($error array empty)
				if(count($erors)<1) {
					// connect to the "registration"
					$conn = new mysqli('localhost', 'root', '', 'yomari');

					// check connection
					if (mysqli_connect_errno()) {
					exit('Connect failed: '. mysqli_connect_error());
					}

					// store the values in an Array, escaping special characters for use in the SQL statement
					$adds['userName'] = $conn->real_escape_string($_POST['orgName']);
					$adds['email'] = $conn->real_escape_string($_POST['email']);
					$adds['phoneNo'] = $_POST['phoneNo'];
					$adds['password'] = sha1($conn->real_escape_string($_POST['pass']));
					
					$sql = "INSERT INTO `conductor` (`orgName`,`email`, `phoneNo`, `pass`) VALUES 
					('". $adds['userName']. "','". $adds['email']. "', '". $adds['phoneNo']. "', '". $adds['password']. "'	)";
					
					//if insertion of datais successful
					if ($conn->query($sql) === TRUE) {
							//Here, replace with html. take session if you need
                              echo "You have successful registered"; 
					}	
					else {
						echo 'Error: '. $conn->error;
					}						
				$conn->close();
				}
				else {
					// else, if errors, it adds them in string format and print it
					echo implode('<br />', $erors);
				}
		}			
		else{
			//Here, replace with html. take session if you need
			echo "Passwords do not match";
		}
	}		
	else {
		echo 'Fill each row in the form';
	}
?>