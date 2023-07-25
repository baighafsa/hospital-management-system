<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modify login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    


<body>
    <form method="post" action="modifyaddb.php" id="pform">
        <label for="aid">Enter your id to modify login details:</label>
        <input type="number" id="aid" name="aid">
        <br>
        <br>
        <br>
        <h2>Modify Details:</h2>
        <label for="adminemail">Email Address:</label>
        <input type="email" id="adminemail" name="adminemail">
        <br>
        <br>
        <label for="adminpw">Passoword:</label>
        <input type="password" id="adminpw" name="adminpw">
        <br>
        <br>
<input type="submit" value="Modify" id="btn">
    </form>
    <br>
    <a href="adminloginmanage.php">  <button id="d">Back to Dashboard</button></a>

</body>
</html>


