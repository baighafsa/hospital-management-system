<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookappointment</title>
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
    <?php
    $conn=new mysqli("localhost", "root", "", "medical");
    
    if(!$conn){
        echo "error while connecting..!";
    }

    $docemail=$_GET['docemail'];
    $sql="SELECT * FROM doctorprofile WHERE docemail='$docemail'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    echo "<h1>Booking Appointment with Dr. ".$row['docname']."</h2>";
    echo "<h3>".$row['specialization']."</h3>";
    echo "<h3>".$row['experince']."</h3>";

    $sql2="SELECT * FROM availability WHERE docemail='$docemail'";

    $result2=$conn->query($sql2);
    
    echo "<table>";
    
    echo "<tr><th>Email</th><th>DAY</th><th>WEEK</th><th>MONTH</th><th>Time</th><th>DEPARTURE TIME</th></tr>";
    
    if($result2->num_rows > 0) {
        while($rows=$result2->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $rows["docemail"] . "</td>";
            echo "<td>" . $rows["day"] . "</td>";
            echo "<td>" . $rows["week"] . "</td>";
            echo "<td>" . $rows["month"] . "</td>";
            echo "<td>" . $rows["start"] . "</td>";
            echo "<td>" . $rows["end"] . "</td>";
            
            echo "</tr>";   
        }
        echo "</table>";
    } else {
        echo "No Records!!";
    }
    
    
    $conn->close();
    echo "<br>";
    ?>
    <h2>Enter Your Details:</h2>
    <form  action="appointmentdb.php" method="post">
        <input type="hidden" name="docemail" value="<?php echo $docemail; ?>">
        <label for="aname">Name:</label>
        <input type="text" name="aname">
        <br>
        <br>
        <label for="aemail">Email:</label>
        <input type="email" name="aemail">
        <br>
        <br>
        <label for="aphone">Phone No:</label>
        <input type="text" name="aphone">
        <br>
        <br>
        <label for="adate">Date:</label>
        <input type="text" name="adate">
        <br>
        <br>
        <label for="atime">Time:</label>
        <input type="text" name="atime">
        <br>
        <br>
        <input type="submit" value="Book">
    </form>
    
</body>
</html>

