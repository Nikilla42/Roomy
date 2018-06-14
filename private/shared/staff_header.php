<?php
	if(!isset($page_title)) { $page_title = 'Roomy Staff Area';}
?>

<!doctype html>

<html lang="en">
	<head>
	  <title>RFR - <?php echo h($page_title); ?></title>
	  <meta charset="utf-8">
		<link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
	</head>
	
	<body>
	
	  <header>
			<h1>Roomy Staff Area</h1>
	  </header>
		
	  <navigation>
			<ul>
				<li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
			</ul>
	  </navigation>