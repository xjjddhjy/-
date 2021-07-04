<?php


header("content-type:text/html;charset=utf-8");

// echo '123';
// 接受提交过来的数据

// get用超全局变量（这些变量默认就在，在某些时候会有值）
// $_GET
// post
echo $_GET;
echo '<br>';
print_r($_GET);
?>