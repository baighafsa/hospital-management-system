<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
       $(document).ready(function() {
$('#btn').on('click', function() {
$("#btn").attr("disabled", "disabled");
var disease = $('#disease').val();
var prevention = $('#prevention').val();
var cure = $('#cure').val();

if(disease!="" && prevention!="" && cure!=""){
	$.ajax({
		url: "adddisdb.php",
		type: "POST",
		data: {
			disease: disease,
			prevention: prevention,
            cure: cure,
					
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
<h2>Add Doctors</h2>
    <form method="post" id="pform" action="adddisdb.php">
        
        <label for="disease">Disease:</label>
        <input type="text" id="disease" name="disease">
        <br>
        <br>
        <label for="prevention">Prevention:</label>
        <input type="text" id="prevention" name="prevention">
        <br>
        <br>
        <label for="cure">Cure:</label>
        <input type="text" id="cure" name="cure">
        <br>
        <br>
        
        <input type="submit" id="btn" value="Add Disease">

    </form>
<br>
    <a href="managedis.php">  <button id="a">Back to Dashboard</button></a>
</body>
</html>



