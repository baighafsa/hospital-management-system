<?php

$conn=new mysqli("localhost", "root", "", "medical");


$sql="SELECT * FROM patients ";

$result=$conn->query($sql);

echo "<table>";

echo "<tr><th>ID</th><th>NAME</th><th>ADDRESS</th><th>EMAIL</th><th>PHONE NO:</th></tr>";

if($result->num_rows > 0) {
    while($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows["pid"] . "</td>";
        echo "<td>" . $rows["name"] . "</td>";
        echo "<td>" . $rows["address"] . "</td>";
        echo "<td>" . $rows["email"] . "</td>";
        echo "<td>" . $rows["phoneno"] . "</td>";
        
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
<a href="patientregmanage.php"><button id="view1"><--back</button></a>

</body>
</html>