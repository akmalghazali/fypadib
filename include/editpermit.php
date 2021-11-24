<?php
	include 'connect.php';
	$id=$_POST['id'];
    $guider=$_POST['guider'];
    $status=$_POST['status'];
	$sql = "UPDATE permit set guider = '$guider',
                            status = '$status'
    WHERE bookedid='$id'";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>