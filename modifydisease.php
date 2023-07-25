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
        <label for="dis_id">Enter Id of the disease of which you want to modify login details of:</label>
        <input type="number" id="dis_id" name="dis_id">
        <br>
        <br>
        <br>
        <h2>Modify Details:</h2>
        <label for="disease">Disease:</label>
        <input type="text" id="disease" name="disease">
        <br>
        <br>
        <label for="prevention">prevention:</label>
        <input type="text" id="prevention" name="prevention">
        <br>
        <br>
        <label for="cure">cure:</label>
        <input type="text" id="cure" name="cure">
        <br>
        <br>
<input type="submit" value="Modify">
    </form>
    <br>
    <a href="managedis.php">  <button id="d">Back to Dashboard</button></a>

</body>
</html>


<?php

$conn=new mysqli("localhost", "root", "", "medical");
$dis_id=$_POST['dis_id'];
$sql="SELECT * FROM disease WHERE dis_id='$dis_id'";
$result=$conn->query($sql);

if($result->num_rows>0){
    $doctor=$result->fetch_assoc();

    $disease=$_POST['disease'] ?? $doctor['disease'];
    $prevention=$_POST['prevention'] ?? $doctor['prevention'];
    $cure=$_POST['cure'] ?? $doctor['cure'];
   
    $sql="UPDATE disease SET disease='$disease', prevention='$prevention', cure='$cure'";
    $conn->query($sql);

    echo "<script>alert('Modified successfully');</script>";
       
} else {
    echo "<script>alert('Error!!!');</script>";
     
}
$conn->close();
?>