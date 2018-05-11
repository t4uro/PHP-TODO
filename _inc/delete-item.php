<?php

	// include config file
	require 'config.php';

	// delete item
	$affected = $database->delete('items', 
		[ 'id' 	 => $_POST['id'] ]
	);

	// if success
	if ( $affected ) {
		header('Location: '. $base_url .'/index.php');
		die();
	}