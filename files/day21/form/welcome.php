<?php

$fname = $_POST["fname"];
$age = $_REQUEST["age"];

$arr = array("fname" => $fname, "age" => $age);
echo "<meta charset='utf-8'>";
echo "中文";
echo json_encode($arr);

// mongoDB

// DBA
// database administrator

?>