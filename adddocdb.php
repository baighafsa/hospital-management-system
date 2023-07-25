<?php

$conn=mysqli_connect("localhost", "root", "", "medical");

    $docname=$_POST['docname'];
    $docemail=$_POST['docemail'];
    $docaddr=$_POST['docaddr'];
    $docphoneno=$_POST['docphoneno'];
    $doccity=$_POST['doccity'];
    $specialization=$_POST['specialization'];
    $experince=$_POST['experince'];

    $sql="INSERT INTO doctorprofile (docname, docemail, docaddr, docphoneno, doccity, specialization, experince) VALUES ('$docname', '$docemail', '$docaddr', '$docphoneno', '$doccity', '$specialization', '$experince')";


    if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);


?>