<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    $incNumber = $_GET['incNumber'];
    function getDecimal($binary) {
        $decimals = str_split($binary);
        $decimals = array_reverse($decimals);
        $final = 0;
        foreach ($decimals as $key => $decimal) {
            $final += $decimal*pow(2,$key);
        }
        return $final;
    }
?>

<form action="" method="get">
    Enter a binary in decimal notation:
    <input type="text" name="incNumber" id="incNumber"></input>
    <input type="submit" name="submit" value="send"></input>
    <br></br>
</form>

<?php
    $result = getDecimal($incNumber);
    echo "binary in decimal notation: ".$result;
?>
</body>
</html>