<?php 
include_once('config.php'); 

$id = ($_GET['id']);

$sql = "SELECT * FROM `students` WHERE `sid`='{$id}' LIMIT 1";
$reuslt = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($reuslt);

echo $json = json_encode($row);
?>