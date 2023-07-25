<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Disease</title>
</head>
<body>
    <form method="post">
        <label for="dis_id">Enter id of the disease of which you want to delete record of:</label>
        <input type="number" id="dis_id" name="dis_id">
        <button type="submit">Delete</button>
    </form>
<br>
    <a href="managedis.php">  <button id="a">Back to Dashboard</button></a>

</body>
</html>

<?php

$mysqli=mysqli_connect("localhost", "root", "", "medical");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $dis_id=$_POST['dis_id'];

    $stmt=$mysqli->prepare("SELECT * FROM disease WHERE dis_id=?" );
    $stmt->bind_param('s', $dis_id);
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows===1){
        $patient=$result->fetch_assoc();
        $dis_id=$patient['dis_id'];

        $stmt=$mysqli->prepare("DELETE FROM disease WHERE dis_id=?");
        $stmt->bind_param('i', $dis_id);
        $stmt->execute();
        echo "<script>alert('Record Deleted successfully');</script>";
    } else {
        echo "<script>alert('Error while deleting');</script>";
    }
}

?>