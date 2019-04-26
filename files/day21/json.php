<?php



$arr1 = array("name" => "zhangsan", "age" => 18);
$arr2 = array("name" => "lisi", "age" => 20);

$arr = array($arr1, $arr2);

echo json_encode($arr);

?>