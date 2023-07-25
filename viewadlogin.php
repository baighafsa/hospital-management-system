
<?php

$conn=new mysqli("localhost", "root", "", "medical");

$sql="SELECT * FROM adminlogin";

$result=$conn->query($sql);

echo "<table>";

echo "<tr><th>ID</th><th>EMAIL</th><th>PASSWORD</th></tr>";

if($result->num_rows > 0) {
    while($rows=$result->fetch_assoc()){
        echo "<tr><td>" . $rows['aid'] . "</td><td>" . $rows['adminemail'] . "</td><td>" . $rows['adminpw'] . "</td></tr>";
    }
} else {
    echo "No Records!!";
}

echo "</table>";

$conn->close();
?>