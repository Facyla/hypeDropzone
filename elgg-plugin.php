<?php
require_once __DIR__ . '/autoloader.php';

return [
	'views' => [
		'default' => [
			'dropzone/lib.js' => __DIR__ . '/views/default/dropzone/dropzone-amd-module.js',
			'css/dropzone/stylesheet' => __DIR__ . '/views/default/dropzone/dropzone.css',
		],
	],
	'actions' => [
		'dropzone/upload' => [],
	],
];
