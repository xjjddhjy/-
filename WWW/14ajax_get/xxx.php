<?php
$name=$_GET['name'];
$nameArr=array('jack','rose','icemointaion','robot');
// 定义和用法
// in_array() 函数搜索数组中是否存在指定的值。
// 注释：如果 search 参数是字符串且 type 参数被设置为 TRUE，则搜索区分大小写。
// 语法
// in_array(search,array,type)
// 参数	描述
// search	必需。规定要在数组搜索的值。
// array	必需。规定要搜索的数组。
// type	可选。如果设置该参数为 true，则检查搜索的数据与数组的值的类型是否相同。
$result=in_array($name,$nameArr);
if($result==true){
    echo '很遗憾,已经被注册';
}else{
    echo '恭喜你，可以注册';
}
sleep(2);
?>