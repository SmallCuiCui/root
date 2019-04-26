<?php
  // 引入另外一个php文件
  include("./config.php");

  // 新增
  // 书写sql语句
  $username = "喜羊羊";
  $password = "111";
  // 再php里，双引号可以直接解析变量(单引号不行)
  $sql = "insert into user (username,password) values ('$username','$password')";
  
  // 执行sql语句
  $res = mysql_query($sql);
  // $res 是个boolean
  echo $res;

  



?>