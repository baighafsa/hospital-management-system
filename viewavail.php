<?php
session_start();
$conn=new mysqli("localhost", "root", "", "medical");

$docemail=$_SESSION['user_id'];
$sql="SELECT * FROM availability WHERE docemail='$docemail'";

$result=$conn->query($sql);

echo "<table>";

echo "<tr><th>ID</th><th>DAY</th><th>WEEK</th><th>MONTH</th></tr>";

if($result->num_rows > 0) {
    while($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows["docemail"] . "</td>";
        echo "<td>" . $rows["day"] . "</td>";
        echo "<td>" . $rows["week"] . "</td>";
        echo "<td>" . $rows["month"] . "</td>";
        
        echo "</tr>";   
    }
    echo "</table>";
} else {
    echo "No Records!!";
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
    <style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid #ddd;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
<a href="doctor.php"><button id="view1"><--back</button></a>

</body>
</html>