<?php

include 'conn.php';
?>
<?php
$name=$_POST["name"];
$email=$_POST["email"];
$address=$_POST["address"];
$phoneno=$_POST["phoneno"];

$sql="INSERT into patients (pid, name, email, address, phoneno) values ('', '$name', '$email', '$address', '$phoneno')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
    
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);

?>