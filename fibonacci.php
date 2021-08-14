<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    $incNumber = $_GET['incNumber'];
    function getFibonacciSumm($fibCount) {
    	if((int)$fibCount > 0){
    		return $fibCount <= 1 ? $fibCount = getFibonacciSumm($fibCount - 1) + getFibonacciSumm($fibCount - 2);
    	} else {
    		return "nope";
    	}
 		
    }
?>

<form action="" method="get">
    Enter a Fibonacci numeric to summ:
    <input type="text" name="incNumber" id="incNumber"></input>
    <input type="submit" name="submit" value="send"></input>
    <br></br>
</form>

<?php
    $result = getFibonacciSumm($incNumber);
    echo "Fibonacci Summ: ".$result;
?>
</body>
</html>