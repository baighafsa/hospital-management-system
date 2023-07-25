<?php
session_start();
$user_id=$_SESSION['user_id'];
$conn=mysqli_connect("localhost", "root", "", "medical");

if(!$conn){
    die("connection failed: ". mysqli_connect_error());
}

$docname=$_POST['docname'];
$docaddr=$_POST['docaddr'];
$docphoneno=$_POST['docphoneno'];
$doccity=$_POST['doccity'];
$specialization=$_POST['specialization'];
$experince=$_POST['experince'];




$sql="UPDATE doctorprofile SET docname='$docname', docaddr='$docaddr', docphoneno='$docphoneno', doccity='$doccity',specialization='$specialization', experince='$experince' WHERE docemail='$user_id'";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
    
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);

?>