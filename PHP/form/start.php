<?php 
	$num = 10;

	//单行注释

	/*
	多行注释
	
	*/

	for($i = 0; $i <10; $i++){
		echo $i;
	}

	//索引数组
	$arr = array(4,5,1,8,6);

	//关联数组
	$arr = array(
		"name"=>"lidan",
		"age"=>18
	);
	

	//转成json格式输出
	echo json_encode($arr);
 ?>