<?php

use AwesomePHP\Bootstrap\Application;


// add autoloader

require_once './vendor/autoload.php';


$app = new Application();

$app->view('home/index.php');