<?php

namespace system\core;
use system\core\Db;


abstract class Model {
	public $db;
	public function __construct() {
		$this->db = new Db;
	}
}