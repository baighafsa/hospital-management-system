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
        <label for="nid">Enter id of the news of which you want to delete record of:</label>
        <input type="number" id="nid" name="nid">
        <button type="submit">Delete</button>
    </form>
<br>
    <a href="managenews.php">  <button id="a"><--Back</button></a>

</body>
</html>

<?php

$mysqli=mysqli_connect("localhost", "root", "", "medical");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nid=$_POST['nid'];

    $stmt=$mysqli->prepare("SELECT * FROM news WHERE nid=?" );
    $stmt->bind_param('s', $nid);
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows===1){
        $patient=$result->fetch_assoc();
        $nid=$patient['nid'];

        $stmt=$mysqli->prepare("DELETE FROM news WHERE nid=?");
        $stmt->bind_param('i', $nid);
        $stmt->execute();
        echo "<script>alert('Record Deleted successfully');</script>";
    } else {
        echo "<script>alert('Error while deleting');</script>";
    }
}

?>