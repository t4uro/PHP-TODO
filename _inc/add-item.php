<?php

	// include config file
	require_once 'config.php';

	// insert to db
	$id = $database->insert('items', [
		'text' => $_POST['message'] 
	]);

	// if success
	if ( $id ) {
		die('success');
	}