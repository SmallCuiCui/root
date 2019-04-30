<?php


$id = $_GET["id"];
$arr = array(
  "id" => $id,
  "txt" => "hello world"
);

echo json_encode($arr);

?>