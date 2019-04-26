<?php  
	$arr = array(
		"id"=>15,
		"name"=>"qian",
		"age"=>10
	);
	$arr1 = array(
		"id"=>15,
		"name"=>"feng",
		"age"=>20
	);
	$testArray  = array($arr,$arr1);
	echo json_encode($testArray);
?>