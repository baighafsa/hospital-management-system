<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify doctor</title>
</head>
<body>
    <form method="post">
        <label for="pid">Enter Patient's ID of which you want to modify data of:</label>
        <input type="number" id="pid" name="pid">
        <br>
        <br>
        <h2>Modify Patient's Record</h2>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="ABC">
    <br>
    <br>
    <label for="email">EmailAddress:</label>
    <input type="email" id="email" name="email" placeholder="abc@gmail.com">
    <br>
    <br>
    
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" placeholder="5A/block C MirpurKhas">
    <br>
    <br>
    <label for="phoneno">PhoneNumber:</label>
    <input type="phoneno" id="phoneno" name="phoneno" placeholder="01234567890">
    <br>
    <br>

    <input type="submit" value="Modify" id="btn">
    </form>
    <br>
    <a href="admindashboard.php">  <button id="a">Back to Dashboard</button></a>

</body>
</html>

<?php

$conn=new mysqli("localhost", "root", "", "medical");
$pid=$_POST['pid'];
$sql="SELECT * FROM patients WHERE pid='$pid'";
$result=$conn->query($sql);

if($result->num_rows>0){
    $patient=$result->fetch_assoc();

    $name=$_POST['name'] ?? $patient['name'];
    $email=$_POST['email'] ?? $patient['email'];
    $address=$_POST['address'] ?? $patient['address'];
    $phoneno=$_POST['phoneno'] ?? $patient['phoneno'];
    
    $sql="UPDATE patients SET name='$name', email='$email', address='$address', phoneno='$phoneno', address='$address'";
    $conn->query($sql);

    echo "<script>alert('Modified successfully');</script>";
       
} else {
    echo "<script>alert('Error!!!');</script>";
     
}
$conn->close();
?>