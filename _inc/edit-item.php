<?php

	// include config file
	require 'config.php';

	// insert to db
	$affected = $database->update('items', 
		[ 'text' => $_POST['message'] ],
		[ 'id' 	 => $_POST['id'] ]
	);

	// if success, ajax reloaded
	if ( $affected ) {
		header('Location: '. $base_url .'/index.php');
		die();
	}