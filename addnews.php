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
var nid = $('#nid').val();
var title = $('#title').val();
var content = $('#content').val();
var date = $('#date').val();
var link = $('#link').val();


if(nid!="" && title!="" && content!="" && date!="" && link!=""){
	$.ajax({
		url: "addnewsdb.php",
		type: "POST",
		data: {
			nid: nid,
			title: title,
            content: content,
			date: date,
            link:link;
           			
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
    <form method="post" action="addnewsdb.php" id="pform">
    <label for="nid">News ID:</label>
        <input type="number" id="nid" name="nid">
        <br>
        <br>
        <label for="title">Title:</label>
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

        <input type="submit" id="btn" value="Add News">

       
     </form>
     <br>
     
     <a href="managenews.php">  <button id="a"><--Back</button></a>
   
</body>
</html>



