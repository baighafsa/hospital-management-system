<?php

$conn=new mysqli("localhost", "root", "", "medical");

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$doccity=$_POST["doccity"];
$specialization=$_POST["specialization"];

$sql="SELECT * FROM doctorprofile WHERE doccity='$doccity' AND specialization='$specialization'";
$result=$conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "Doctor Name: ". $row['docname'] ."<br>";
        echo "Doctor Specialization: ". $row['specialization'] ."<br>";
        echo "Doctor Location: ". $row['doccity'] ."<br>";
        echo "Doctor Experience: ". $row['experince'] ."<br>";

        echo "<a href='bookappointment.php?docemail=" . $row["docemail"]. "'>Book Appointment</a><br>";

    }
} else {
    echo "No doctors found!!";
}

$conn->close();

?>