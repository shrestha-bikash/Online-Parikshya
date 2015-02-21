<!DOCTYPE html>
<html>
<head>
<title>MathJax TeX Test Page</title>
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
</script>
<script type="text/javascript"
  src="../MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
</head>
<body>

<?php
$conn = new mysqli('localhost', 'root', '', 'mcadatabase');
    if (mysqli_connect_errno()) {
      exit('Connect failed: '. mysqli_connect_error());
    }
	$last_id=48;	
	function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
		$numbers = range($min, $max);
		shuffle($numbers);
		return array_slice($numbers, 0, $quantity);
	}

	//$trickArray= UniqueRandomNumbersWithinRange(0,$last_id,5);
	
	$sql2 = 'SELECT DISTINCT * FROM `english` WHERE setNo="C"';

	// perform the query and store the result
	$result = $conn->query($sql2);
	
	//create an array
	$json_response = array();
	static $counter=1;
	// if the $result contains at least one row
	//echo $result->num_rows;
	if ($result->num_rows > 0 ) {
		// output data of each row from $result
		while($row = $result->fetch_assoc()) {
		//echo "<br /><br /> ".$counter++.") ".$row['Question']." @!~delimiter"."<br /> "."a) ".$row['Option1']." @!~delimiter"."<br  /> "."b) ".$row['Option2']." @!~delimiter"."<br /> "."c) ".$row['Option3']." @!~delimiter"."<br /> "."d) ".$row['Option4Right']." @!~delimiter"."<br /> ";
			echo "<br /> ".$counter++.") ".$row['Question']."<br /> "."a) ".$row['Option1']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."b) ".$row['Option2']."<br /> "."c) ".$row['Option3']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."d) ".$row['Option4Right']."<br /> ";
						//	echo "<br /><br /> ".$counter++.") ".$row['Question']."<br /> ";
			array_push($json_response,$row);		
		}	
			
			//echo json_encode($json_response);		
	}
	else {
		echo '0 results';
	}

$conn->close();
?>
</body>
</html>