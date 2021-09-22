<?php

namespace system\core;

class View{

	public $route;
	public $path;
	public $template = 'default';

	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	public function render($title,$data = []) {
		ob_start();
		require 'catalog/view/'.$this->path.'.php';
		$content = ob_get_clean();
		require 'catalog/view/templates/'.$this->template.".php";

	}
}