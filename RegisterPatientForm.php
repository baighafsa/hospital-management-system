<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Register</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
       $(document).ready(function() {
$('#btn').on('click', function() {
$("#btn").attr("disabled", "disabled");
var name = $('#name').val();
var email = $('#email').val();
var address = $('#address').val();
var phoneno = $('#phoneno').val();
if(name!="" && email!="" && address!="" && phoneno!="" ){
	$.ajax({
		url: "Patientdb.php",
		type: "POST",
		data: {
			name: name,
			email: email,
			address: address,
			phoneno: phoneno,				
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				$("#btn").removeAttr("disabled");
				$('#pform').find('input:text').val('');
				$("#success").show();
				$('#success').html('Data added successfully !'); 
                window.location="PatientLayout.php"
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
</head>
<style>
    body{
        text-align:center;
        
    }
    #name{
        height:50px;
        width:220px;
        border-radius:30px;
    }
    #email{
        height:50px;
        width:220px;
        border-radius:30px;
    }
   
    #address{
        height:50px;
        width:220px;
        border-radius:30px;
    }
    #phoneno{
        height:50px;
        width:220px;
        border-radius:30px;
    }

    #btn{
        height:50px;
        width:80px;
        border-radius:20px;
        color:black;

    }
   
</style>



<body>
<div style="margin: auto;width: 60%;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
    <h1>Registration Form</h1>
    <form action="Patientdb.php" method="post" id="pform">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="ABC">
    <br>
    <br>
    <label for="email">EmailAddress:</label>
    <input type="email" id="email" name="email" placeholder="abc@gmail.com">
    <br>
    <br>
    
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" placeholder="5A/block C MirpurKhas">
    <br>
    <br>
    <label for="phoneno">PhoneNumber:</label>
    <input type="phoneno" id="phoneno" name="phoneno" placeholder="01234567890">
    <br>
    <br>

    <input type="submit" value="Register" id="btn">
    </form>
</body>
</html>