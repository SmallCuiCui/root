<?php 
	$cb = $_GET["cb"];
	$arr = array(
		"age"=>15,
		"name"=>"xiao"
	);
	$json = json_encode($arr);

	echo "$cb($json)";
 ?>