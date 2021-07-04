<?php
// 因为Chrome默认编码是utf-8,一般汉字都能正确输出
// 不过别的浏览器就不知道
// ，最好还是加上header('content-type:text/html;charset=utf-8');
$day='礼拜天';
// switch语句，和js一样
switch($day){
    case '礼拜一':
    case '礼拜二':
    case '礼拜三':
    case '礼拜四':
    case '礼拜五':
    echo '上班';
    break;
    case '礼拜六':echo '继续加班';break;
    case '礼拜天':echo '放假';break;
    default:echo '错误';break;
}
// for循环也一样
for ($i=0;$i<10;$i++){
    echo '<br>';
    // 不过拼接字符串要用.不是+
    echo '感觉自己闷闷哒'.$i;
}
// while
$num=0;
while($num<10){
    echo '哈'.$num;
    echo '<br>';
    $num++;
}
// dowhile
do{
echo '先do一次先';
} while(false);

?>