<?php
	spl_autoload_register(function ($class) {
    	require_once 'classes/' . $class . '.php';
	});
	function Shape($name,$params){
		$$name = new $name($params);
		$$name->printOut();
	}
	$radius = ["radius" => 36];
	$array = ["weight" => 36,
			  "height" => 22];

	Shape('triangle',$array);