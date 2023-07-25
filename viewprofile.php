<?php

session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: doctorloginform.php");
    exit();
}

$conn=mysqli_connect("localhost", "root", "", "medical");

if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}

$user_id=$_SESSION['user_id'];
$sql="SELECT * FROM doctorprofile WHERE docemail='$user_id'";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $user=mysqli_fetch_assoc($result);
    echo "<table style='border-collapse: collapse;'>";
    echo "<tr><th style='border: 3px solid black; padding: 5px;'>Name</th><td style='border: 3px solid black; padding: 5px;'>{$user['docname']}</td></tr>";
    echo "<tr><th style='border: 3px solid black; padding: 5px;'>Email</th><td style='border: 3px solid black; padding: 5px;'>{$user['docemail']}</td></tr>";
    echo "<tr><th style='border: 3px solid black; padding: 5px;'>Address</th><td style='border: 3px solid black; padding: 5px;'>{$user['docaddr']}</td></tr>";
    echo "<tr><th style='border: 3px solid black; padding: 5px;'>Phoneno</th><td style='border: 3px solid black; padding: 5px;'>{$user['docphoneno']}</td></tr>";
    echo "<tr><th style='border: 3px solid black; padding: 5px;'>City</th><td style='border: 3px solid black; padding: 5px;'>{$user['doccity']}</td></tr>";
    echo "<tr><th style='border: 3px solid black; padding: 5px;'>Specialization</th><td style='border: 3px solid black; padding: 5px;'>{$user['specialization']}</td></tr>";
    echo "<tr><th style='border: 3px solid black; padding: 5px;'>Experience</th><td style='border: 3px solid black; padding: 5px;'>{$user['experince']}</td></tr>";
   
   
    echo "</table>";
} else {
    echo "user not found";
}

mysqli_close($conn);
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
			background-color: plum;
			color: black;
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