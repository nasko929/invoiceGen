<?php
	require("header.php");
	session_destroy();
	header("Location: ".$root_path);

?>