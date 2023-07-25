<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Patient</title>
</head>
<body>
    <form method="post">
        <label for="pid">Enter id of the City of which you want to delete record of:</label>
        <input type="number" id="pid" name="pid">
        <button type="submit">Delete</button>
    </form>
<br>
    <a href="patientregmanage.php">  <button id="a"><--Back</button></a>

</body>
</html>

<?php

$mysqli=mysqli_connect("localhost", "root", "", "medical");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $pid=$_POST['pid'];

    $stmt=$mysqli->prepare("SELECT * FROM patients WHERE pid=?" );
    $stmt->bind_param('s', $pid);
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows===1){
        $patient=$result->fetch_assoc();
        $pid=$patient['pid'];

        $stmt=$mysqli->prepare("DELETE FROM patients WHERE pid=?");
        $stmt->bind_param('i', $pid);
        $stmt->execute();
        echo "<script>alert('Patient Record Deleted successfully');</script>";
    } else {
        echo "<script>alert('Error while deleting');</script>";
    }
}

?>