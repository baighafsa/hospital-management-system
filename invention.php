<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATEST NEWS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
    <style>
        <!DOCTYPE html>
<html>
<head>
	<title>Medical News</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			padding: 20px;
		}
		h1 {
			font-size: 32px;
			margin-bottom: 20px;
            color:#6b0f0f;
		}
		h2 {
			font-size: 24px;
			margin-top: 40px;
			margin-bottom: 10px;
		}
		p {
			margin-bottom: 20px;
		}
		.news-item {
			margin-bottom: 40px;
			border-bottom: 1px solid #ccc;
			padding-bottom: 20px;
            color:brown;
		}
		.news-item:last-child {
			border-bottom: none;
			padding-bottom: 0;
		}
		.news-item .title {
			font-size: 20px;
			margin-bottom: 10px;
		}
		.news-item .date {
			font-size: 14px;
			color: #999;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div clas="navbar-header">
                <a class="navbar-barnd" href="#">CARE GROUP</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="RegisterPatientForm.php">Patient</a></li>
                <li><a href="doctorloginform.php">Doctor</a></li>
                <li><a href="adminloginform.php">Admin</a></li>
                <li><a href="dpc.php">Diseases And Cures</a></li>
                <li><a href="invention.php">Latest news</a></li>
            </ul>
        </div>
    </nav>
	<h1>Latest Medical News</h1>
	<?php
		
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$database = 'medical';

		
		$mysqli = new mysqli($host, $user, $password, $database);

	
		if ($mysqli->connect_error) {
			die('Connection failed: ' . $mysqli->connect_error);
		}

		
		$query = "SELECT * FROM news ORDER BY date DESC LIMIT 10";
		$result = $mysqli->query($query);

		
		while ($row = $result->fetch_assoc()) {
			$title = $row['title'];
			$date = date('F j, Y', strtotime($row['date']));
			$content = $row['content'];
			$link = $row['link'];
	?>
			<div class="news-item">
				<h2 class="title"><?php echo $title; ?></h2>
				<p class="date"><?php echo $date; ?></p>
				<p><?php echo $content; ?></p>
				<p><a href="<?php echo $link; ?>">Read more &raquo;</a></p>
			</div>
	<?php
		}

		
		$mysqli->close();
	?>
</body>
</html>
    </style>
</body>
</html>