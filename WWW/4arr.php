<?php

header('content-type:text/html;charset=utf-8');
// 数组
$foodArr=array('榴莲','西蓝花炒蛋','鸡蛋','西蓝花炒蛋');
// 获取元素
echo $foodArr[0];
// 打印数组的所有内容
// 直接echo $foodArr是不行的,要用print_r
print_r($foodArr);
// 遍历数组,在php里.是拼接，相当于别人的+,因此不能$foodArr.length，
// 要去查w3c离线文档，找对应的函数
for ($i=0;$i<count($foodArr);$i++){
    echo '<br>';
    echo $foodArr[$i];
}
// 关系数组，类似于python的字典
$person=array('name'=>'吴京','film'=>'战狼','wife'=>'谢楠');
echo $person['wife'];
echo '<br>';
// 用键取值
foreach ($person as $key =>$value){
    echo $key.'------'.$value.'<br>';
}
?>