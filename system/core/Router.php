<?php 

namespace system\core;

class Router{

	protected $routes = [];
	protected $params = [];

	public function __construct() {
		$arr = require 'system/config/routes.php';
		foreach ($arr as $key => $value) {
			$this->add($key,$value);
		}
	}

	public function add($route, $params){
		$route = '#^'.$route.'$#';
		$this->routes[$route] = $params;
	}

	public function match(){
		$url = trim($_SERVER['REQUEST_URI'], '/');
		foreach ($this->routes as $route => $params) {
			if(preg_match($route,$url,$matches)){
				$this->params = $params;
				return true;
			}
		}
		return false;
	}

	public function run(){
		if($this->match()){
			$path = 'catalog\controllers\\'.ucfirst($this->params['controller']).'Controller';
			if(class_exists($path)){
				$action = $this->params['action'].'Action';
				if(method_exists($path, $action)){
					$controller = new $path($this->params);
					$controller->$action();
				} else {
					header('HTTP/1.0 404 not found');
				}
			} else {
				header('HTTP/1.0 404 not found');
			}
		} else {
			header('HTTP/1.0 404 not found');
		}
	}
}