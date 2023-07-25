

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
    #view{
        height:50px;
        width:130px;
        background-color:pink;
        border-color:black;
        border-radius:5px;
    }

    #add{
        height:50px;
        width:130px;
        background-color:yellow;
        border-color:black;
        border-radius:5px;
    }

    #modify{
        height:50px;
        width:130px;
        background-color:lightgreen;

        border-color:black;
        border-radius:5px;
    }

    #appoin{
        height:50px;
        width:130px;
        background-color:plum;

        border-color:black;
        border-radius:5px;
    }

    #update{
        height:50px;
        width:130px;
        background-color:lightblue;

        border-color:black;
        border-radius:5px;
    }

    #view1{
        height:50px;
        width:130px;
        background-color:orange;

        border-color:black;
        border-radius:5px;
    }

    #add1{
        height:50px;
        width:130px;
        background-color:salmon;

        border-color:black;
        border-radius:5px;
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
                </ul>
                <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
        </div>
    </nav>
    <br>
    <br>
    <?php
session_start();
echo "WELCOME, " . $_SESSION['user_id'];

?>
<br>
<br>
  <a href="viewprofile.php">  <button id="view">VIEW PROFILE</button></a>
    
    <br>
    <br>
<a href="adddet.php"><button id="add">ADD DETAILS</button></a>


    
    <br>
    <br>
    <a href="adddet.php"><button id="modify">MODIFY PROFILE</button></a>

    
    <br>
    <br>
   <a href="viewappointment.php"> <button id="appoin">VIEW APPOINTMENTS</button></a>

    
    <br>
    <br>
    <a href="availability.php"><button id="update">UPDATE AVAILABILITY</button></a>

    <br>
    <br>
    <a href="addavailabl.php"><button id="add1">ADD AVAILABILITY</button></a>
    <br>
    <br>
    <a href="viewavail.php"><button id="view1">VIEW AVAILABILITY</button></a>

</body>
</html>