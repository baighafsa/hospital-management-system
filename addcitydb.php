<?php

$conn=mysqli_connect("localhost", "root", "", "medical");

    $cid=$_POST['cid'];
    $cityname=$_POST['cityname'];

    $sql="INSERT INTO cities (cid, cityname) VALUES ($cid, '$cityname')";


    
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);


?>