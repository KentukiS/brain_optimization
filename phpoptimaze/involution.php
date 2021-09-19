<?php 
function involution($number,$degree){
	if ($degree == 0) {
    	return 1;
	}
	if ($degree == 1) {
		return $number;
	}
	$iteration = array();
	$iteration[] = $number;
	for($i=2;$i<=$degree;$i++){
		$f=$i-2;
		$iteration[] = $iteration[$f]*$number;
	}
	return end($iteration);
}

echo(involution(3,3)) ;
echo "</br>";

function involutionRecursion($number,$degree) {
  if ($degree == 0) {
    return 1;
  }
  return $number * involutionRecursion($number, $degree - 1);
}

echo(involutionRecursion(5, 1));