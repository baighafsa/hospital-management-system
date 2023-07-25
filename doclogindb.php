

<?php


   
    $conn=mysqli_connect("localhost", "root", "", "medical");

    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }


    $docemail=$_POST['docemail'];
    $docpw=$_POST['docpw'];

    $stmt=mysqli_prepare($conn, "SELECT * FROM doctorlogin WHERE docemail = ? AND docpw = ?");

    mysqli_stmt_bind_param($stmt, "ss", $docemail, $docpw);
    mysqli_stmt_execute($stmt);
   

    $result=mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result)==1){
        session_start();
        $row=mysqli_fetch_assoc($result);
        $_SESSION['user_id']=$row['docemail'];

        header("Location: doctor.php");

    } else {
        echo "Invalid email or password";
    }

    mysqli_close($conn);



?>