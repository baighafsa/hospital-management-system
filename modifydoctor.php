<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify doctor</title>
</head>
<body>
    <form method="post" action="modifydocdb.php">
        <label for="docemail">Enter Doctor's Email of which you want to modify data of:</label>
        <input type="email" id="docemail" name="docemail">
        <br>
        <br>
        <h2>Modify Doctor's Record</h2>
        <label for="docname">Name:</label>
        <input type="text" id="docname" name="docname">
        <br>
        <br>
        <label for="docaddr">Address:</label>
        <input type="text" id="docaddr" name="docaddr">
        <br>
        <br>
        <label for="docphoneno">Phone Number:</label>
        <input type="text" id="docphoneno" name="docphoneno">
        <br>
        <br>
        <label for="doccity">City:</label>
        <input type="text" id="doccity" name="doccity">
        <br>
        <br>
        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" name="specialization">
        <br>
        <br>
        <label for="experince">Experience:</label>
        <input type="text" id="experince" name="experince">
        <br>
        <br>
        <input type="submit" value="Modify">

    </form>
    <br>
    <a href="admindashboard.php">  <button id="a">Back to Dashboard</button></a>

</body>
</html>

