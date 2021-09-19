<?php 
	abstract class Shape{
		abstract protected function getPerimeter();
	    abstract protected function getSquare();
	    public function printOut() {
	        print "Периметр: " . $this->getPerimeter() . "</br>" . "Площадь: " .$this->getSquare();
	    }
	}
