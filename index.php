<?php 
	$title = "Main page";
	require("header.php");
	$curr_logged = (isset($_SESSION['is_logged']));
?>
<?php
	if($curr_logged)
	{
		?>
		<div class = "logout_button">
			<a href = <?php echo $logout_path; ?> >Logout</a>
 		</div>
		<?php
	}
?>
<br>
<div class="mainpart">
	<?php

		if($curr_logged)
		{
			echo "<center><h1> Welcome to the Invoice Generator of D-Consult, {$_SESSION['username']}.</h1><br>";
		}
		else
		{
			echo "<center><h1> Welcome to the Invoice Generator of D-Consult!</h1><br>";
			echo "<h3><a href=" . $login_path . ".>Enter into the system</a></h3>";
		}
	?>
	<!-- <a href="pdf_generator.php">Go and see the Invoice in PDF format.</a></center> -->
	


</div>
