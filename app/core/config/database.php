<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
		'host' => '127.0.0.1',
		'driver' => 'mysql',
		'database' => 'test',
		'username' => 'admin',
		'password' => 'admin2020',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => 'tbl_' 
]);

$capsule->bootEloquent(); 