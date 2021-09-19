<?php 
abstract class Shape{
	abstract protected function getPerimeter();
    abstract protected function getSquare();
    public function printOut() {
        print "Периметр: " . $this->getPerimeter() . "</br>" . "Площадь: " .$this->getSquare();
    }
}

class Rectangle extends Shape
{
	public function __construct($array){
		echo "hi rectangle";
		foreach ($array as $key => $value) {
			$this->$key = $value;
		}
	}
	public function getPerimeter(){
		$result = $this->weight + $this->height;
		return $result;
	}
	public function getSquare(){
		$result = $this->weight * $this->height;
		return $result;
	}
}

class Triangle extends Shape
{
	public function __construct($array){
		echo "hi triangle";
		foreach ($array as $key => $value) {
			$this->$key = $value;
		}
	}
	public function getPerimeter(){
		$result = $this->weight + $this->height;
		return $result;
	}
	public function getSquare(){
		$result = $this->weight * $this->height;
		return $result;
	}
}

class Circle extends Shape
{
	private $pi = 3.14;
	public function __construct($array){
		echo "hi krug";
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

function Shape($name,$params){
	$$name = new $name($params);
	$$name->printOut();
}



$radius = ["radius" => 36];
$array = ["weight" => 36,
		  "height" => 22];
$a=4;
$b=4;
// $rectangle = new Circle($radius);
// $rectangle->setWeight($a);
// $triangle  = new Triangle();
// $circle  = new Circle();
// $rectangle->printOut();


// Shape('circle',$radius);
Shape('triangle',$array);