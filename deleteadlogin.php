<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete admin login</title>
</head>
<body>
    <form method="post">
        <label for="aid">Enter id of the admin of which you want to delete record of:</label>
        <input type="number" id="aid" name="aid">
        <button type="submit">Delete</button>
    </form>
<br>
    <a href="adminloginmanage.php">  <button id="a">Back to Dashboard</button></a>

</body>
</html>

<?php

$mysqli=mysqli_connect("localhost", "root", "", "medical");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $aid=$_POST['aid'];

    $stmt=$mysqli->prepare("SELECT * FROM adminlogin WHERE aid=?" );
    $stmt->bind_param('s', $aid);
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows===1){
        $doctor=$result->fetch_assoc();
        $aid=$doctor['aid'];

        $stmt=$mysqli->prepare("DELETE FROM adminlogin WHERE aid=?");
        $stmt->bind_param('i', $aid);
        $stmt->execute();
        echo "<script>alert('Record Deleted successfully');</script>";
    } else {
        echo "<script>alert('Error while deleting');</script>";
    }
}

?>