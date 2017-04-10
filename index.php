<?php
require 'global.php';

	$template->Show($template->SetParams());

	if (!isset($_GET['page'])) 
	{
		header("Location: ?page=index");
	} 
	else{}

?>