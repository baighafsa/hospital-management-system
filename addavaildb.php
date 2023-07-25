<?php

$conn=mysqli_connect("localhost", "root", "", "medical");

    $docemail=$_POST['docemail'];
    $day=$_POST['day'];
    $week=$_POST['week'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $start=$_POST['start'];
    $end=$_POST['end'];

    
    $sql="INSERT INTO availability (docemail, day, week, month, year, start, end) VALUES ('$docemail', '$day', '$week', '$month', '$year', '$start','$end')";


	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);

?>