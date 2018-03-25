<?php
	error_reporting(E_ALL); // & ~E_NOTICE);

	// include the config files
	include 'config/paths.php';
	include DIR_CONFIG.'config.php';

	define('IS_PROD', strpos($_SERVER['SERVER_NAME'], '192.168.') !== 0);

	// include other files
	include DIR_CORE.'lib.php';
	include DIR_LIB.'page.php';
	include DIR_LIB.'detectmobilebrowser.php';
	
	// pre-computations
	$jqVers = browser_supports_jquery2() ? '2.2.1' : '1.12.1';
	$page = new Page();
	$page->css->add('lib/bootstrap-3.3.5', /*'lib/bootstrap-theme-3.3.5',*/ 'styles');
	$page->js->add("lib/jquery-{$jqVers}", 'lib/bootstrap-3.3.5', 'ips');
	if( preg_match("/IEMobile\/10\.0/", $_SERVER['HTTP_USER_AGENT'], $matches) )
		$page->js->add('lib/ie10-viewport-bug-workaround');
	$panels = array_filter(scandir(DIR_VIEWS), 'filter_panels');
	
	header('Content-Type: text/html; charset=UTF-8');
?><!DOCTYPE html>
<html lang="fr">
<head>
	<title>Instant Pour Soi</title>
	<link rel="SHORTCUT ICON" href="<?php echo $page->image('favicon.png'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="Instant pour soi, Massage, Massage bien-être, Instant, Soi, Jossigny, relaxation, Lucien, Luchez, relaxologue, Bussy Saint Georges, Val d'Europe, Seine et Marne"/>
	<meta name="description" content="LUCIEN LUCHEZ à Jossigny, institut de beauté moderne, vous offre toute une gamme de soins de bien-être, des soins du visage, au massage, en passant par le maquillage permanent."/>
	<meta name="robots" content="index,follow"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge;" />
<?php
	$page->write_header();
?>
</head>
<body>

<?php
include DIR_VIEWS.'header.php';
?>

	<div class="container panels-holder">
		
<?php
	foreach($panels as $file)
	{
		echo "\t\t<div panel-id=\"". substr($file, 6, -4) . "\">\n";
		include DIR_VIEWS.$file;
		echo "\n\t\t</div>\n\n";
	}
?>
	</div>

<?php
	include DIR_VIEWS.'footer.php';
?>

</body>
</html>