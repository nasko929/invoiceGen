<?php

	$title = "Login into the system";
	require("header.php");
	$errors = "";
	$password = "denitsadc";
	if(isset($_POST['submittedform']))
	{
		if(strlen($_POST['pass'])<8 || $_POST['pass']!=$_POST['confpass'])
		{
			$errors.="Your password is less than 8 characters or passwords didn't match.<br>";
		}
		else if($_POST['pass']!=$password)
		{
			$errors.="Wrong password<br>";
		}
		else
		{
			$_SESSION['is_logged'] = 1;
			$_SESSION['username'] = "Denitsa";
			header("Location: ".$root_path);
		}
	}
?>
<div class="mainpart">
	<center>
		<h2>Type your password</h2>
		<form method = "post" action = "login.php">
			<input placeholder = "Password" type = "password" name = "pass" id = "pass"><br>
			<p id = "ErrorSeeker" style="color:red"></p>
			<input placeholder = "Confirm Password" type = "password" name = "confpass" id = "confpass"><br>
			<p id = "ErrorSeeker2" style="color:red"></p>
			<input type = "hidden" name = "submittedform" value = "1" >
			<input type = "submit" value = "Login">
		</form>
		<p>
			<?php

				echo $errors;

			?>
		</p>
	</center>
</div>
<?php

	

?>
<script src=<?php echo $error_seeker_path; ?> ></script>

<?php
	require($footer_path);
?>