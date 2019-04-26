<?php
	$config = array(
		"host"=>"localhost:3306",
		"dbname"=>"hyc",
		"username"=>"root",
		"password"=>""
	);

	//与数据库建立连接
	mysql_connect($config['host'],$config['username'],$config['password']);

	//选择数据库
	mysql_select_db($config['dbname']);

	//设置编码
	mysql_query("set charset 'utf8'");
	mysql_query("set charseter set 'utf8'");


	//查询获取数据，并解析成json文件
	//执行mysql查询语句，并返回查询结果，是一个资源类型
	$res = mysql_query('select * from user');

	$arr = array();
	//遍历数据库查询得到的资源
	while ($row = mysql_fetch_assoc($res)) {
		//遍历得到每一行数据，相当于一个对象，放入数组中
		array_push($arr,$row);
	}
	echo json_encode($arr);



	//插入insert数据进数据库
	$age = 18;
	$name = "huang";
	$id = 9;
	//php中双引号内可以解析变量（单引号不行）
	$sql = "insert into user (name,age,id) values ('$name','$age',$id)";
	//执行sql语句,返回值为boolean型，1表示插入成功
	$res = mysql_query($sql);
	echo $res.'<br>';

	//更改数据库数据updata
	$id = 11;
	$name = "jiaqi";
	$sql = "update user set name = '$name' where id = '$id'";
	$res = mysql_query($sql);
	echo '<br>'.$res;
?>

