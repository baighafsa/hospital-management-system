<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add City</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
       $(document).ready(function() {
$('#btn').on('click', function() {
$("#btn").attr("disabled", "disabled");
var cid = $('#cid').val();
var cityname = $('#cityname').val();

if(cid!="" && cityname!=""){
	$.ajax({
		url: "addcitydb.php",
		type: "POST",
		data: {
			cid: cid,
			cityname: cityname,
           			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				$("#btn").removeAttr("disabled");
				$('#pform').find('input:text').val('');
				$("#success").show();
				$('#success').html('Data added successfully !'); 
                
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
});
});
</script>
        <style>
            .is-invalid{
                border-color:red;
            }
        </style>

<body>
    <h1>Add City</h1>
    <form method="post" action="addcitydb.php" id="pform">
    <label for="cid">City ID:</label>
        <input type="number" id="cid" name="cid">
        <br>
        <br>
        <label for="cityname">City Name:</label>
        <input type="text" id="cityname" name="cityname">
        <br>
        <br>
        <input type="submit" id="btn" value="Add City">

       
     </form>
     <br>
     
     <a href="admindashboard.php">  <button id="a">Back to Dashboard</button></a>
   
</body>
</html>



