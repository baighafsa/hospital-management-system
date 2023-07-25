<?php

$conn=mysqli_connect("localhost", "root", "", "medical");

    $nid=$_POST['nid'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    $date=$_POST['date'];
    $link=$_POST['link'];
   
    $sql="INSERT INTO news (nid, title, content, date, link) VALUES ($nid, '$title', '$content', '$date', '$link')";


    
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);


?>