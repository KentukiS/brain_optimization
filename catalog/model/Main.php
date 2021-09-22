<?php

namespace catalog\model;
use system\core\Model;

class Main extends Model {

	public function getSlides(){
		$result = $this->db->row('SELECT name,slide, description FROM slides Limit 3')
		return $result;
	}
	
}