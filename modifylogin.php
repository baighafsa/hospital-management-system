<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modify login</title>
</head>
<body>
    <form method="post">
        <label for="did">Enter Id of the doctor of which you want to modify login details of:</label>
        <input type="number" id="did" name="did">
        <br>
        <br>
        <br>
        <h2>Modify Details:</h2>
        <label for="docemail">Email Address:</label>
        <input type="email" id="docemail" name="docemail">
        <br>
        <br>
        <label for="docpw">Passoword:</label>
        <input type="password" id="docpw" name="docpw">
        <br>
        <br>
<input type="submit" value="Modify">
    </form>
    <br>
    <a href="admindashboard.php">  <button id="d">Back to Dashboard</button></a>

</body>
</html>


<?php

$conn=new mysqli("localhost", "root", "", "medical");
$did=$_POST['did'];
$sql="SELECT * FROM doctorlogin WHERE did='$did'";
$result=$conn->query($sql);

if($result->num_rows>0){
    $doctor=$result->fetch_assoc();

    $docemail=$_POST['docemail'] ?? $doctor['docemail'];
    $docpw=$_POST['docpw'] ?? $doctor['docpw'];
   
    $sql="UPDATE doctorlogin SET docemail='$docemail', docpw='$docpw'";
    $conn->query($sql);

    echo "<script>alert('Modified successfully');</script>";
       
} else {
    echo "<script>alert('Error!!!');</script>";
     
}
$conn->close();
?>