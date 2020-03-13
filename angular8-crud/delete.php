<?php 
include_once('config.php'); 
$id = $_GET['id'];
$sql = "DELETE FROM `students` WHERE `sid` = '{$id}' LIMIT 1";
if(mysqli_query($conn, $sql)){
	http_response_code(204);
}else{
	return http_response_code(422);
}
?>