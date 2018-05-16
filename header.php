<?php
	session_start();
	$con = mysqli_connect('127.0.0.1','nasko','yJ9i8PpGRync0ud5','invoicegen');
	if(!$con)
		echo "Excuse us. We're currently inavailable to connect to our database. Please be patient!";
	require("paths.php");
?>

<html>
	<head>
		<link rel = "stylesheet" href = <?php echo $css_default_path; ?> >
		<title>
			<?php echo $title; ?>
		</title>
	</head>
	<body>
