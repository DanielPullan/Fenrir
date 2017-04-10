<?php

define('C', '/core');
define('M', '/manage');


//Required Files

	//Config
	require_once C . M . '/config.php';

	//Class Files
	require_once C . '/template.class.php';
	require_once C . '/mysql.class.php';
	require_once C . '/users.class.php';
	require_once C . '/grid.class.php';

	//Template System Information
	$tplDes = $_CONFIG['site']['template'];
	$tplPg = $_GET['page'];
	define ('TEMPLATE_PATH', 'template/'.$tplDes);
	define ('TEMPLATE_PAGE', '/'.$tplPg.'.php');
	//Raw Addons
	define('RAW_PATH', 'template/'.$tplDes);
	//Begin Activating the Engine
	use Krypton as Kry;

	$template = new Kry\Template(TEMPLATE_PATH.TEMPLATE_PAGE);

	$user = new Kry\User();

	$mysql = new Kry\MySQL();

	$grid = new Kry\Grid();

	//Other Activating
	session_start();

	$mysql->Connect();

	$user->Login();

	if(!isset($_SESSION['user']['id']) && $_GET['page'] != 'login')
	{
		header("Location: ?page=login");
	}
	else if(isset($_SESSION['user']['id']) && $_GET['page'] == 'login')
	{
		header("Location: ?page=index");
	}
?>
