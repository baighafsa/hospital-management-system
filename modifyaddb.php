<?php

$conn=mysqli_connect("localhost", "root", "", "medical");


if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

$aid=$_POST['aid'];
$adminemail=$_POST['adminemail'];
$adminpw=$_POST['adminpw'];


$sql ="UPDATE adminlogin SET adminemail='$adminemail', adminpw='$adminpw' WHERE aid=$aid";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Updated successfully');</script>";
    header('Location :modifyadlogin.php');
} else {
    echo "error";
}

mysqli_close($conn);

?>