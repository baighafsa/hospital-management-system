<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete doctor</title>
</head>
<body>
    <form method="post">
        <label for="docemail">Enter Email Address of the Doctor of which you want to delete record of:</label>
        <input type="email" id="docemail" name="docemail">
        <button type="submit">Delete</button>
    </form>
<br>
    <a href="admindashboard.php">  <button id="a">Back to Dashboard</button></a>

</body>
</html>

<?php

$mysqli=mysqli_connect("localhost", "root", "", "medical");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $docemail=$_POST['docemail'];

    $stmt=$mysqli->prepare("SELECT * FROM doctorprofile WHERE docemail=?" );
    $stmt->bind_param('s', $docemail);
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows===1){
        $doctor=$result->fetch_assoc();
        $docemail=$doctor['docemail'];

        $stmt=$mysqli->prepare("DELETE FROM doctorprofile WHERE docemail=?");
        $stmt->bind_param('i', $docemail);
        $stmt->execute();
        echo "<script>alert('Doctor Record Deleted successfully');</script>";
    } else {
        echo "<script>alert('Error while deleting');</script>";
    }
}

?>