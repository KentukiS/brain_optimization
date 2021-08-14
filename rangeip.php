<?php 
function transformationIp($ip,$i=0){
	if($i==4){
		$ip = implode("", $ip);
		return $ip;
	}
	if($i==0){
		$ip = explode(".", $ip);
	}
	$ip[$i] = str_pad($ip[$i], 3, 0, STR_PAD_LEFT);
	return transformationIp($ip, $i + 1);
}

function rangeIpv4($min,$max,$ip){
	$ip = transformationIp($ip);
	$min = transformationIp($min);
	$max = transformationIp($max);

	if((int)$ip >= (int)$min && (int)$ip <= (int)$max ){
		return "IP входит в диапазон";
	} else {
		return "IP не входит в диапазон";
	}
	
}

var_dump(rangeIpv4("160.18.243.7", "256.256.256.19", "256.254.256.80"));
echo "</br>";
var_dump(rangeIpv4("160.18.243.7", "256.256.256.19", "256.256.256.88"));