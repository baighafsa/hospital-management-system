<?php

$conn=mysqli_connect("localhost", "root", "", "medical");


if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

$pid=$_POST['pid'];
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];


$sql ="UPDATE patients SET name='$name', address='$address', email='$email', phoneno='$phoneno'  WHERE pid=$pid";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Updated successfully');</script>";
   
} else {
    echo "error";
}

mysqli_close($conn);

?>