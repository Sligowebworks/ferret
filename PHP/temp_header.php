<?php
function gen_page_links($state)
{

	 switch ($state['instrument'])
	  {
	  		case 'Project Manager': 
	  			$prefix = 'proj_mgr';
	  			$n = 13;
	  		 		break;
			case  'Parent/Guardian': 
				$prefix = 'guardian';
	  		 	$n = 16;
	  		 		break;
	 		case  'Teacher':
	 			$prefix = 'teacher';
	  		 	$n = 15;
	  		 		break;
			case  'Teacher Assistant':
				$prefix = 'TA';
	  		 	$n = 15;
	  		 		break;
	  		default:
	  }	
	  $str = '';
	  
	for ($i = 2; $i < $n +1; $i++) 	
	{
		if ($i < 10) 
		{
			$num = '0' . $i;
		} else
		{
			$num = $i;
		}
		$str .= "<li class=\"leaf\"><a href=\"{$prefix}_page{$num}_verify.php\" title=\"Page {$num}\">Page {$num}</a></li>";
	}
	$str = "\t\t<div class=\"content\">\n\t\t\t<ul class=\"menu\">\n$str\n\t\t\t</ul></div>" ;

	return $str;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <title>Pre-K Incentive Program Data Entry App</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css" media="all">@import "drupal.css"</style>
<!--link rel="alternate" type="application/rss+xml" title="RSS" href="http://68.165.247.164/DrupalGeo/?q=rss.xml" /-->

  <style type="text/css" media="all">@import "bluemarinestyle.css";</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" id="header">
  <tr>
    <td id="logo">
    	  <!--a href="/" title="Home"><img src="/DrupalGeo/themes/bluemarine/logo.png" alt="Logo?" /></a--> 
    	<h1 class='site-name'><a style="color:white">Pre-K Incentive Program Data Entry App</a></h1>          
	</td>
    <td id="menu">
            <div id="primary"><a style="color:white"><?php echo (	isset($state['user_name'])	) ?  'Data Entry Personnel: ' . $state['user_name'] : ''; ?></a> </div>          </td>
  </tr>
  <tr>
    <td colspan="2"><div></div></td>
  </tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" id="content">
  <tr>
    <td id="sidebar-left">
        <div class="block block-user" id="block-user-1">
    <h2 class="title"><?php echo ( !empty($state['instrument'])) ?$state['instrument'] . ' Instrument' : '&nbsp;' ; ?>  </h2>
    <?php
    #side nav
    if (	strpos($state['PageName'], 'page') !== false	)
    {
    	echo gen_page_links($state);
    }
    
    ?>
</div>
 </div>
  <div class="block block-user" id="block-user-0">
 </div>
    </td>    <td valign="top">
            <div id="main">
                <h1 class="title"></h1>
        <div class="tabs"></div>
                        <!-- begin content -->  
