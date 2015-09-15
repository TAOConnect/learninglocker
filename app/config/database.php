<?php

return [
  'fetch' => PDO::FETCH_CLASS,
  'default' => 'mongodb',
  'connections' => [
		'mongodb' => [
		    'driver'   => 'mongodb',
		    'host'     => 'localhost',
		    'port'     => 27017,
		    'username' => 'learnlockuser',
		    'password' => 'learnlockpwd',
		    'database' => 'learninglocker' // Default name (removing this makes Travis fail).

	/*
	|--------------------------------------------------------------------------
	| Migration Repository Table
	|--------------------------------------------------------------------------
	|
	| This table keeps track of all the migrations that have already run for
	| your application. Using this information, we can determine which of
	| the migrations on disk haven't actually been run in the database.
	|
	*/

		],
	],
	'migrations' => 'migrations',
];
