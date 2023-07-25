<?php

$conn=mysqli_connect("localhost", "root", "", "medical");


if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

$docemail=$_POST['docemail'];
$day=$_POST['day'];
$week=$_POST['week'];
$month=$_POST['month'];
$year=$_POST['year'];
$start_time=$_POST['start'];
$end_time=$_POST['end'];


$sql ="UPDATE availability SET day='$day', week='$week', month='$month', year='$year', start='$start_time', end='$end_time' WHERE docemail='$docemail'";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Updated successfully');</script>";
    header('Location :availability.php');
} else {
    echo "error";
}

mysqli_close($conn);




?>