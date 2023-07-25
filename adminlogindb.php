

<?php


   
    $conn=mysqli_connect("localhost", "root", "", "medical");

    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }


    $adminemail=$_POST['adminemail'];
    $adminpw=$_POST['adminpw'];

    $stmt=mysqli_prepare($conn, "SELECT * FROM adminlogin WHERE adminemail = ? AND adminpw = ?");

    mysqli_stmt_bind_param($stmt, "ss", $adminemail, $adminpw);
    mysqli_stmt_execute($stmt);
   

    $result=mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result)==1){
        session_start();
        $row=mysqli_fetch_assoc($result);
        $_SESSION['user_id']=$row['adminemail'];

        header("Location: admindashboard.php");

    } else {
        echo "Invalid email or password";
    }

    mysqli_close($conn);



?>