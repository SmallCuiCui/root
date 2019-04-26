<?php
  // 引入另外一个php文件
  include("./config.php");

  // 查询
  // 书写sql语句
  $sql = "select * from user";
  // 执行sql语句
  $res = mysql_query($sql);
  // $res时资源类型
  $arr = array();
  while($row = mysql_fetch_assoc($res)){
    array_push($arr, $row);
  }

  echo json_encode($arr);

  



?>