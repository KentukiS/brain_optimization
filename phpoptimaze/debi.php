<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

    $incNumber = $_GET['incNumber'];
    function getBinary($decimal) {
        $binary = array();
        if($decimal == "0" || $decimal == "1"){
           array_push($binary,$decimal);
           return $binary;
        } else {
            $pos = strpos($decimal, ".");
            if($pos === false){
               for (; ; ) {
                    $remainder = $decimal % 2;
                    $decimal = $decimal - $remainder;
                    $decimal = $decimal/2;
                    array_push($binary,$remainder);

                    if($decimal == "1"){
                        array_push($binary,1);
                        $binary = array_reverse($binary);
                        break;
                    }
                }
           }else {
                // for float
           }
           return $binary;
        }
        
        
    }
?>

<form action="" method="get">
    Enter a digit in decimal notation:
    <input type="text" name="incNumber" id="incNumber"></input>
    <input type="submit" name="submit" value="send"></input>
    <br></br>
</form>

<?php 
    if( isset($_GET['incNumber']) && is_numeric($_GET['incNumber'])){
        $result = getBinary($incNumber);
        if( isset($result)){
            echo "decimal in binary notation: ".implode($result);
        } else {
            echo "ERROR: enter the number!";
        }
    } else {
        echo "ERROR: enter the number!";
    }
?>
</body>
</html>