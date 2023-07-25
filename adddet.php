<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add details</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
       $(document).ready(function() {
$('#btn').on('click', function() {
$("#btn").attr("disabled", "disabled");
var docname = $('#docname').val();
var docaddr = $('#docaddr').val();
var docphoneno = $('#docphoneno').val();
var doccity = $('#doccity').val();
var specialization = $('#specialization').val();
var experince = $('#experince').val();
if(docname!="" && docaddr!="" && docphoneno!="" && doccity!="" && specialization!="" && experince!=""){
	$.ajax({
		url: "modifyprof.php",
		type: "POST",
		data: {
			docname: docname,
			docaddr: docaddr,
            docphoneno: docphoneno,
			doccity: doccity,
			specialization: specialization,	
            experince: experince,			
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
    <h2>Update Profile</h2>
    <form action="modifyprof.php" method="post" id="pform">
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
        <input type="submit" value="UPDATE" id="btn">

    </form>

    <a href="doctor.php"><button id="view1"><--back</button></a>
</body>
</html>