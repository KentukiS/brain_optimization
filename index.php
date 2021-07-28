<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if( isset($_GET['submit']) )
{
    //be sure to validate and clean your variables
    $val1 = htmlentities($_GET['val1']);
    $val2 = htmlentities($_GET['val2']);
   function myFunction($arg_1, $arg_2 = 0)
	{
	    echo "Пример функции.\n";
	    return $arg_1.$arg_2;
	}
    //then you can use them in a PHP function. 
    $result = myFunction($val1, $val2);
   
}
?>

<?php if( isset($result) ) echo $result; //print the result above the form ?>

<form action="" method="get">
    Inserisci number1: 
    <input type="text" name="val1" id="val1"></input>
    <br></br>
    Inserisci number2:
    <input type="text" name="val2" id="val2"></input>

    <br></br>

    <input type="submit" name="submit" value="send"></input>
</form>
</body>
</html>