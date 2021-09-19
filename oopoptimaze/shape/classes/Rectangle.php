<?php
	class Rectangle extends Shape
	{
		public function __construct($array){
			foreach ($array as $key => $value) {
				$this->$key = $value;
			}
		}
		public function getPerimeter(){
			$result = 2*($this->weight + $this->height);
			return $result;
		}
		public function getSquare(){
			$result = $this->weight + $this->height;
			return $result;
		}
	}