<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Availability</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
       $(document).ready(function() {
$('#btn').on('click', function() {
$("#btn").attr("disabled", "disabled");
var docemail = $('#docemail').val();
var day = $('#day').val();
var week = $('#week').val();
var month = $('#month').val();
var year = $('#year').val();
var start = $('#start').val();
var end = $('#end').val();

if(docemail!="" && day!="" && week!="" && month!="" year!="" && start!="" && end!=""){
	$.ajax({
		url: "addavaildb.php",
		type: "POST",
		data: {
			docemail: docemail,
			day: day,
            week: week,
            month: month,
            year: year,
            start: start,
            end: end,


           			
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
    <h1>Add Availability</h1>
    <form method="post" action="addavaildb.php" id="pform">
    <br>
        <br>
        <label for="docemail">Email:</label>
        <input type="email" id="docemail" name="docemail">
        <br>
        <br>
        <label for="day">Day:</label>
        <input type="text" id="day" name="day">
        <br>
        <br>
        <label for="week">Week:</label>
        <input type="text" id="week" name="week">
        <br>
        <br>
        <label for="month">Month:</label>
        <input type="text" id="month" name="month">
        <br>
        <br>
        <label for="year">Year:</label>
        <input type="text" id="year" name="year">
        <br>
        <br>
        <label for="start">Start Time:</label>
        <input type="text" id="start" name="start">
        <br>
        <br>
        <label for="end">End Time:</label>
        <input type="text" id="end" name="end">
        <br>
        <br>

        <input type="submit" value="ADD" id="btn">

     </form>
     <br>
     
     <a href="doctor.php">  <button id="a">Back to Dashboard</button></a>
   
</body>
</html>



