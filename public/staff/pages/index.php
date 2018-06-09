<?php require_once('../../../private/initialize.php'); ?>
<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<?php 
	$pages = [ 
	['id' => '1', 'position' => '1', 'visible' => '1', 'page_name' => 'House1'],
	['id' => '2', 'position' => '2', 'visible' => '1', 'page_name' => 'House2'],
	['id' => '3', 'position' => '3', 'visible' => '1', 'page_name' => 'House3'],
	['id' => '4', 'position' => '4', 'visible' => '1', 'page_name' => 'House4']
	];
?>
<div id="content">
	<div class="pages listing">
		<h1>Pages</h1>
		
		<div id="actions">
			<a class="action" href="">Create New Page</a>
		</div>
		
		<table class="list">
			<tr>
				<th>ID</th>
				<th>Position</th>
				<th>Visible</th>
				<th>Name</th>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>