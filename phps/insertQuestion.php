<?php
// connect to the "yomari" database
$conn = new mysqli('localhost', 'root', '', 'yomari');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

$file = fopen("../data/Sample1.txt", "r") or exit("Unable to open file!");

  $sri= file_get_contents('../data/Sample1.txt');  
  $mka= explode("@!~delimiter",$sri);  
  $kus=array_chunk($mka,5);
  $counter=1;
  for ($i=0; $i< count($kus)-1 ; $i++)
  {
	$qfeed= array("","","","","");
	for ($j=0; $j < count($kus[$i]) ; $j++)
	{   
	
		$qfeed[$j]=addslashes(trim(($kus[$i][$j])));
		 //echo $kus[$i][0] ;
		
	}
	// sql query for INSERT INTO users
		$sql = "INSERT INTO `question` (`Question`, `Option1`, `Option2`, `Option3`, `Option4`)
		VALUES ('$qfeed[0]', '$qfeed[1]', '$qfeed[2]', '$qfeed[3]', '$qfeed[4]')"; 	
		// Performs the $sql query on the server to insert the values
		if ($conn->query($sql) === TRUE) {
		echo 'Questions '.  $counter . ' entry saved successfully'. '<br \>';
		}
		else {
		echo 'Error on: '.  $counter . $conn->error . '<br />';
		}
		$counter+=1;;
  }
 
fclose($file);
$conn->close();

?>