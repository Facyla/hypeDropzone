<?php
use Elgg\DefaultPluginBootstrap;

class Bootstrap extends DefaultPluginBootstrap {
	
	/**
	 * {@inheritdoc}
	 */
	public function init() {
		elgg_extend_view('elgg.css', 'dropzone/dropzone.css');
		elgg_extend_view('admin.css', 'dropzone/dropzone.css');
		
		// check if composer dependencies are distributed with the plugin
		$autoloader_path = self::plugin()->getPath() . '/vendor/autoload.php';
		if (file_exists($autoloader_path)) {
			require_once($autoloader_path);
		} else {
			register_error("Admin notice : please install composer dependencies for plugin: hypeDropzone");
		}
		
	}
	
}
