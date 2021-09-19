<?php
	class Triangle extends Shape
	{
		public function __construct($array){
			foreach ($array as $key => $value) {
				$this->$key = $value;
			}
		}
		public function getPerimeter(){
			$result = $this->weight + 2*$this->height;
			return $result;
		}
		public function getSquare(){
			$result = 0.5 * $this->weight * $this->height;
			return $result;
		}
	}