<?php

namespace AwesomePHP\Bootstrap\System;

class ViewHandler {

	public static function render($path, $data = []){

		extract($data);

		return require_once app()->path('resources/views/'. $path) ;
	}

}