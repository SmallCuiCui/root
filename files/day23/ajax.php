<?php
$id = $_REQUEST["id"];
$arr = array(
  "id" => $id,
  "txt" => "hello world"
);

echo json_encode($arr);

?>


url: ajax.php

method: get post

query: {id}

response: {id, txt}

