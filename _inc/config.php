<?php 
require_once  'vendor/autoload.php';

// Using Medoo namespace
use Medoo\Medoo;
 
// connect to db
$database = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'todo',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
]);


// global variables
$base_url = 'http://localhost:8888/todo';
