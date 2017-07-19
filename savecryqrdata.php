<?php

if (isset($_GET["CRY_SCAN_DATA"])) {

	// $dateNow = date("Y-m-d H:i:s");
	$scanData = $_GET["CRY_SCAN_DATA"];
	$timeStamp = $_GET["CRY_TIME_STAMP"];
	
	$scanData = str_replace('%20', ' ', $scanData);
	$timeStamp = str_replace('%20', ' ', $timeStamp);
	
	// data base connect
	$servername = "localhost";
	$username = "touhidap_touhid";
	$password = "dbpass";
	$dbname = "touhidap_test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
 
		$query1 = "INSERT INTO cryqrdata(scan_data, scan_time) VALUES ('$scanData', '$timeStamp')"; //  NOW() also can use without quote to save server time 
		$result = $conn->query($query1);

		echo "Success";


}else{

	echo 'Not success';

}

?>
