<?php

$conn=new mysqli("localhost", "root", "", "medical");

$docemail=$_POST['docemail'];
$aname=$_POST['aname'];
$aemail=$_POST['aemail'];
$aphone=$_POST['aphone'];
$adate=$_POST['adate'];
$atime=$_POST['atime'];

$sql="INSERT INTO appointment (docemail, aname, aemail, aphone, adate, atime) VALUES ('$docemail','$aname','$aemail','$aphone','$adate','$atime')";

if($conn->query($sql)===TRUE){
    echo "Appointment booked!!";
} else {
    echo "error!";
}
$conn->close();
?>