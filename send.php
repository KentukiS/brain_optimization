<?php
include "config.php";
function writeWinner($winner){
	if($winner == "xxx"){
		$winnerName = "human";
	}else{
		$winnerName = "evilComputer"
	}
	$mysqli->query("UPDATE `players` SET `victories` = `victories` + 1 WHERE `name` == '".$winnerName."' ");
}

writeWinner($_POST['winner']);