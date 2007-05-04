<?php
require('app/app_commit_db.php');

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = $state['next_page'];
if(strpos($extra, '/') === false)
{
	$extra = $uri.'/'. $extra;
}
$header = "Location: http://$host$extra";
if($debug == true)
{
	echo "<a href=\"http://$host$extra\">$header</a>";
} else
{
	header($header);
}?>