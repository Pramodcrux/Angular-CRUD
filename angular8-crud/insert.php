<?php 
include_once('config.php'); 
$postdata = file_get_contents("php://input");
print_r($postdata);

if (isset($postdata) && !empty($postdata)) {
	$request = json_decode($postdata);


	//Sanitize

	$fName = mysqli_real_escape_string($conn, trim($request->fName));
	$lName = mysqli_real_escape_string($conn, trim($request->lName));
	$email = mysqli_real_escape_string($conn, trim($request->email));

	//insert data
	$sql = "INSERT INTO `students` (`fName`, `lName`, `email`) VALUES ('$fName','$lName', '$email')";
	if (mysqli_query($conn, $sql)) {
		http_response_code(201);
	}else{
		http_response_code(422);
	}
}
?>