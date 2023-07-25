<?php

$conn=mysqli_connect("localhost", "root", "", "medical");

    $disease=$_POST['disease'];
    $prevention=$_POST['prevention'];
    $cure=$_POST['cure'];
   

    $sql="INSERT INTO disease (dis_id, disease, prevention, cure) VALUES ('', '$disease', '$prevention', '$cure')";


    
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);


?>