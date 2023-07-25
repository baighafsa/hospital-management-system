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
    <form method="post" action="modifynewsdb.php" id="pform">
        
        <h2>Modify Details:</h2>
        <label for="title">Enter title of which you want to modify record of:</label>
        <input type="text" id="title" name="title">
        <br>
        <br>
        <label for="content">Content:</label>
        <input type="text" id="content" name="content">
        <br>
        <br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">
        <br>
        <br>
        <label for="link">Link:</label>
        <input type="text" id="link" name="link">
        <br>
        <br>
<input type="submit" value="Modify" id="btn">
    </form>
    <br>
    <a href="patientregmanage.php">  <button id="d"><--Back</button></a>

</body>
</html>


