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
        'password' => 'jh3kc2Spq47p6C',
        'database' => 'learninglocker' // Default name (removing this makes Travis fail).
    ],
	],
	'migrations' => 'migrations',
];
