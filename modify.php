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
    <form method="post" action="modifydb.php" id="pform">
        <label for="pid">Enter your id to modify details:</label>
        <input type="number" id="pid" name="pid">
        <br>
        <br>
        <br>
        <h2>Modify Details:</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address">
        <br>
        <br>
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email">
        <br>
        <br>
        <label for="phoneno">Phone no:</label>
        <input type="text" id="phoneno" name="phoneno">
        <br>
        <br>
<input type="submit" value="Modify" id="btn">
    </form>
    <br>
    <a href="patientregmanage.php">  <button id="d">Back to Dashboard</button></a>

</body>
</html>


