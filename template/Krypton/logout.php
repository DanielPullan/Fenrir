<?php
	session_start();
	session_unset();
	session_destroy();

header("Location: {URL}/index.php?page=login");

?>