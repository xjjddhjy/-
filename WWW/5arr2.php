
<style>
span{
    font-size:12px;
}
</style>

<?php

header('content-type:text/html;charset=utf-8');

$starArr=array(
    array('name'=>'吴京','film'=>'战狼','friend'=>'张翰'),
    array('name'=>'刘德华','film'=>'无间道','friend'=>'曾志伟'),
    array('name'=>'黄渤','film'=>'疯狂的石头','friend'=>'林志玲'),
    array('name'=>'汪峰','film'=>'春天里','friend'=>'那英'),
);
// echo $starArr[2]['film'];
for($i=0;$i<count($starArr);$i++){

    echo '<h2>明星: <span style="color:orange">'.$starArr[$i]['name'].'</span>出演了:'
    .$starArr[$i]['film'].
    '好朋友是'.$starArr[$i]['friend'].'<br></h2>';
}
// 想要给数据添加样式就得在输出的字符串加，不过好麻烦
// 还有另一种方法，在php标签外写样式，这
// 样不会执行，代码会原封不动交给浏览器解析
?>
<p>我在外面</p>
<a href="#" > 点我</a>