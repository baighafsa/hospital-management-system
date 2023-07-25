<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    #a{
        height:50px;
        width:130px;
        background-color:burlywood;
        border-color:black;
        border-radius:5px;
    }

    #b{
        height:50px;
        width:130px;
        background-color:bisque;
        border-color:black;
        border-radius:5px;
    }

    #c{
        height:50px;
        width:130px;
        background-color:darksalmon;

        border-color:black;
        border-radius:5px;
    }

    #d{
        height:50px;
        width:130px;
        background-color:peachpuff;

        border-color:black;
        border-radius:5px;
    }

    #e{
        height:50px;
        width:130px;
        background-color:rosybrown;

        border-color:black;
        border-radius:5px;
    }



    #f{
        height:50px;
        width:130px;
        background-color:sandybrown;

        border-color:black;
        border-radius:5px;
    }


    #g{
        height:50px;
        width:130px;
        background-color:tan;

        border-color:black;
        border-radius:5px;
    }

    #h{
        height:50px;
        width:130px;
        background-color:wheat;

        border-color:black;
        border-radius:5px;
    }

    #i{
        height:50px;
        width:130px;
        background-color:lightsalmon;

        border-color:black;
        border-radius:5px;
    }

    #j{
        height:50px;
        width:130px;
        background-color:chocolate;

        border-color:black;
        border-radius:5px;
    }

    h1{
        color:brown;
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
      <li><a href="homepage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
        </div>
    </nav>
    <h1>ADMIN DASHBOARD</h1>
    
    <br>

  <a href="addcities.php">  <button id="a">ADD CITIES</button></a>
    
    <br>
    <br>
<a href="adddoctors.php"><button id="b">ADD DOCTORS</button></a>


    
    <br>
    <br>
    <a href="modifydoctor.php"><button id="c">MODIFY DOCTORS</button></a>

    
    <br>
    <br>
   <a href="modifypatient.php"> <button id="d">MODIFY PATIENT</button></a>

    
    <br>
    <br>
    <a href="deletecity.php"><button id="e">DELETE CITIES</button></a>


    <br>
    <br>
   <a href="deletedoctor.php"> <button id="f">DELETE DOCTORS</button></a>

    
   <br>
    <br>
   <a href="deletepatient.php"> <button id="g">DELETE PATIENT</button></a>

    
   <br>
    <br>
   <a href="manageuser.php"> <button id="h">MANAGE USERS</button></a>

   <br>
    <br>
   <a href="manageinfo.php"> <button id="i">MANAGE INFORMATION</button></a>
   <br>
    <br>
  
</body>
</html>