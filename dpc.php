<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disease</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
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
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div clas="navbar-header">
                <a class="navbar-barnd" href="#">CARE GROUP</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="RegisterPatientForm.php">Patient</a></li>
                <li><a href="doctorloginform.php">Doctor</a></li>
                <li><a href="adminloginform.php">Admin</a></li>
                <li><a href="dpc.php">Diseases And Cures</a></li>
                <li><a href="invention.php">Latest news</a></li>
            </ul>
        </div>
    </nav>
    <h2>Common Disease, Preventions and their Cure</h2>
    <?php

$conn=new mysqli("localhost", "root", "", "medical");


$sql="SELECT * FROM disease ";

$result=$conn->query($sql);

echo "<table>";

echo "<tr><th>ID</th><th>DISEASE</th><th>PREVENTION</th><th>CURE</th></tr>";

if($result->num_rows > 0) {
    while($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows["dis_id"] . "</td>";
        echo "<td>" . $rows["disease"] . "</td>";
        echo "<td>" . $rows["prevention"] . "</td>";
        echo "<td>" . $rows["cure"] . "</td>";
        
        echo "</tr>";   
    }
    echo "</table>";
} else {
    echo "No Records!!";
}

echo "</table>";
$conn->close();
?>
</body>
</html>

