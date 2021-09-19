<?php
	class Circle extends Shape
	{
		private $pi = 3.14;
		public function __construct($array){
			foreach ($array as $key => $value) {
				$this->$key = $value;
			}
		}
		public function getPerimeter(){
			$result = 2*$this->pi*$this->radius;
			return $result;
		}
		public function getSquare(){
			$result = $this->pi*($this->radius*$this->radius);
			return $result;
		}
	}