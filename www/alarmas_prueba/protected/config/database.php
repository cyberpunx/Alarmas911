<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/alarmastest',
	// uncomment the following lines to use a MySQL database
	'class'=>'CDnConnection',
	'connectionString' => 'mysql:host=localhost;dbname=alarmas_db',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	
);