<?php 
include_once('config.php'); 

$students = [];

$sql ="SELECT * FROM `students`";
if ($result = mysqli_query($conn, $sql)) {
	$i = 0;
	while($row = mysqli_fetch_assoc($result)){
		$students[$i]['sid'] = $row['sid'];
		$students[$i]['fName'] = $row['fName'];
		$students[$i]['lName'] = $row['lName'];
		$students[$i]['email'] = $row['email'];
		$i++;
	}
	//print_r($students);
	echo json_encode($students);
}else{
	http_response_code(404);
}
?>