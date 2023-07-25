<?php

$conn=mysqli_connect("localhost", "root", "", "medical");


if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

$title=$_POST['title'];
$content=$_POST['content'];
$date=$_POST['date'];
$link=$_POST['link'];


$sql ="UPDATE news SET content='$content', date='$date',link='$link' WHERE title='$title'";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Updated successfully');</script>";
    
} else {
    echo "error";
}

mysqli_close($conn);

?>