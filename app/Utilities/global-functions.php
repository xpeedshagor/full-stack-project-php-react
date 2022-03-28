<?php


use AwesomePHP\Bootstrap\Application;
use AwesomePHP\Bootstrap\System\ViewHandler;

/**
 * @return Application
 */
function app(): Application{
	return Application::getInstance();
}



function view($path, $data = []){
	return ViewHandler::render($path, $data);
}