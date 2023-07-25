<?php
session_start();
$conn=new mysqli("localhost", "root", "", "medical");


$docemail=$_SESSION['user_id'];

$sql="SELECT * FROM appointment WHERE docemail='$docemail'";

$result=$conn->query($sql);

if($result->num_rows > 0) {
    while($row=$result->fetch_assoc()){
        echo "<h3>Name: ".$row["aname"]."</h3>";
        echo "<h3>Email: ".$row["aemail"]."</h3>";
        echo "<h3>Phone No: ".$row["aphone"]."</h3>";
        echo "<h3>Date: ".$row["adate"]."</h3>";
        echo "<h3>Time: ".$row["atime"]."</h3>";
        echo "<hr>";
    }
} else {
    echo "<h3>No Appointments found</h3>";
}
$conn->close();

echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<a href="doctor.php"><button id="view1"><--back</button></a>

</body>
</html>