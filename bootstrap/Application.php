<?php

namespace AwesomePHP\Bootstrap;

class Application{

   protected $path;
   protected $viewPath;

   public function __construct(){
       $this->path = __DIR__.'/../';  
       $this->viewPath = $this->path .'resources/views/';  
   } 



   public function view($path){
     return require_once $this->viewPath.$path;
   }

}