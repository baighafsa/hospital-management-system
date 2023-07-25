<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete City</title>
</head>
<body>
    <form method="post">
        <label for="cid">Enter id of the City of which you want to delete record of:</label>
        <input type="number" id="cid" name="cid">
        <button type="submit">Delete</button>
    </form>
<br>
    <a href="admindashboard.php">  <button id="a">Back to Dashboard</button></a>

</body>
</html>

<?php

$mysqli=mysqli_connect("localhost", "root", "", "medical");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $cid=$_POST['cid'];

    $stmt=$mysqli->prepare("SELECT * FROM cities WHERE cid=?" );
    $stmt->bind_param('s', $cid);
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows===1){
        $patient=$result->fetch_assoc();
        $cid=$patient['cid'];

        $stmt=$mysqli->prepare("DELETE FROM cities WHERE cid=?");
        $stmt->bind_param('i', $cid);
        $stmt->execute();
        echo "<script>alert('City Record Deleted successfully');</script>";
    } else {
        echo "<script>alert('Error while deleting');</script>";
    }
}

?>