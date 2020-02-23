<?php

return [
	'bootstrap' => Bootstrap::class,
	
	'actions' => [
		'dropzone/upload' => [],
	],

	'views' => [
		'default' => [
			'dropzone/lib.js' => __DIR__ . '/views/default/dropzone/dropzone-amd-module.js',
		],
	],
];
