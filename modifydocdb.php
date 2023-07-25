<?php

$conn=new mysqli("localhost", "root", "", "medical");



    
    $docemail=$_POST['docemail'];
    $docname=$_POST['docname'];
    $docaddr=$_POST['docaddr'];
    $docphoneno=$_POST['docphoneno'];
    $doccity=$_POST['doccity'];
    $specialization=$_POST['specialization'];
    $experince=$_POST['experince'];

    $sql="UPDATE doctorprofile SET docname='$docname', docaddr='$docaddr', docphoneno='$docphoneno', specialization='$specialization', experince='$experince' WHERE docemail='$docemail'";
    

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Updated successfully');</script>";
        
    } else {
        echo "error";
    }
$conn->close();
?>