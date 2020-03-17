<?php 
include_once('config.php'); 
$postdata = file_get_contents("php://input");
//print_r($postdata);
if (isset($postdata) && !empty($postdata)) {
	$request = json_decode($postdata);


	//Sanitize
	$id = mysqli_real_escape_string($conn, (int)$_GET['id']);
	$fName = mysqli_real_escape_string($conn, trim($request->fName));
	$lName = mysqli_real_escape_string($conn, trim($request->lName));
	$email = mysqli_real_escape_string($conn, trim($request->email));

	//insert data
    echo $sql = "UPDATE `students` SET `fName`='$fName',`lName`='$lName',`$email`='$email',  `sid`= '{$id}'";


	if (mysqli_query($conn, $sql)) {
		http_response_code(201);
	}else{
		http_response_code(422);
	}
}
?>