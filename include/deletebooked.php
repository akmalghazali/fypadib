<?php
	include 'connect.php';
	$id=$_POST['deletebookedid'];
	$sql1 = "DELETE FROM permit
		WHERE bookedid='$id'";
	$sql2 =" DELETE FROM booked
	WHERE id='$id'";

	$sql= $sql1.";".$sql2;
	if (mysqli_multi_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>