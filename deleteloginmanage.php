<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete login</title>
</head>
<body>
    <form method="post">
        <label for="did">Enter Delete of the Doctor of which you want to delete record of:</label>
        <input type="number" id="did" name="did">
        <button type="submit">Delete</button>
    </form>
<br>
    <a href="admindashboard.php">  <button id="a">Back to Dashboard</button></a>

</body>
</html>

<?php

$mysqli=mysqli_connect("localhost", "root", "", "medical");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $did=$_POST['did'];

    $stmt=$mysqli->prepare("SELECT * FROM doctorlogin WHERE did=?" );
    $stmt->bind_param('s', $did);
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows===1){
        $doctor=$result->fetch_assoc();
        $did=$doctor['did'];

        $stmt=$mysqli->prepare("DELETE FROM doctorlogin WHERE did=?");
        $stmt->bind_param('i', $did);
        $stmt->execute();
        echo "<script>alert('Record Deleted successfully');</script>";
    } else {
        echo "<script>alert('Error while deleting');</script>";
    }
}

?>