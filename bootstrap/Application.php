<?php

namespace AwesomePHP\Bootstrap;

use AwesomePHP\App\Providers\RouteServiceProvider;

class Application{

   protected $basePath;
   protected $viewPath;
   protected $publicPath;
   private static $instance = null;

   public function __construct(){
	   $this->setBasePath();
       $this->viewPath = $this->path('resources/views/');
       $this->publicPath = $this->path('public');
   }

   private function setBasePath(){
	   $this->basePath = __DIR__.'/../';
   }

	/**
	 * @return Application
	 */
	public static function getInstance() {
		 if(!static::$instance){
			 static::$instance = new Application();
		 }
	  return static::$instance;
	}


	public function path($path = null){
		return  $this->basePath.($path ? $path : '' ) ;
	}

   public function bootstrap(){

	   $serviceProviders = [
		   RouteServiceProvider::class,
	   ];

	   foreach ($serviceProviders as $serviceProvider){
		  $instance =  new $serviceProvider();
		  $instance->boot();
	   }

   }

}