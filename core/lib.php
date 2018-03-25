<?php

function browser_supports_jquery2()
{
	$agent = $_SERVER['HTTP_USER_AGENT']; $matches = Array();
	if(preg_match("/ MSIE (\d+)/i", $agent, $matches) && !preg_match("/opera/i", $agent)) {
		return intval($matches[1]) >= 9 && IS_PROD;
	} elseif(preg_match("/Trident\/(\d+)/i", $agent, $matches)) { // MSIE
		return intval($matches[1]) >= 5 && IS_PROD;
	}
	return true;
}


function str_starts_with($haystack, $needle)
{
	return ($needle === "") || (strrpos($haystack, $needle, -strlen($haystack)) !== false);
}

function str_ends_with($haystack, $needle)
{
	return ($needle === "") || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}

function filter_panels($file)
{
	return ( str_starts_with($file, 'panel-') && str_ends_with($file, '.php') );
}
