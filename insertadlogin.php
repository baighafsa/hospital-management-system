<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  

  
<body>
<h2>Add Data</h2>
    <form method="post">
        <label for="adminemail">Email:</label>
        <input type="email" id="adminemail" name="adminemail">
        <br>
        <br>
        <label for="adminpw">Password:</label>
        <input type="password" id="adminpw" name="adminpw">
        <br>
        <br>
        
        <input type="submit" name="submit" value="Add">

    </form>
<br>
    <a href="adminloginmanage.php">  <button id="a">Back to Dashboard</button></a>
</body>
</html>



<?php

$conn=mysqli_connect("localhost", "root", "", "medical");
if(isset($_POST['submit'])){
    
    $adminemail=$_POST['adminemail'];
    $adminpw=$_POST['adminpw'];

    $sql="INSERT INTO adminlogin (aid, adminemail, adminpw) VALUES ('', '$adminemail', '$adminpw')";


    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Added successfully');</script>";
        
    }

    else{
        echo "<script>alert('Error! TRY AGAIN!!');</script>";
       
    }
}

?>