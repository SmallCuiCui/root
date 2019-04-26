<?php
  // 引入另外一个php文件
  include("./config.php");

  // 新增
  // 书写sql语句
  $username = "美羊羊";
  $password = "333";
  $id=7;
  // 再php里，双引号可以直接解析变量(单引号不行)
  $sql = "update user set username='$username',password='$password' where id=$id";
  
  // 执行sql语句
  $res = mysql_query($sql);
  // $res 是个boolean
  echo $res;

  



?>