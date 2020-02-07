<?php
use Elgg\DefaultPluginBootstrap;

class hypeDropzone extends DefaultPluginBootstrap {

  public function init() {
  	// @see views.php for view locations
  	elgg_extend_view('elgg.css', 'css/dropzone/stylesheet');
  	elgg_extend_view('admin.css', 'css/dropzone/stylesheet');
  }
}