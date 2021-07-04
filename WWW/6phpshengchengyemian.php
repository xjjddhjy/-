<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <!-- include引入数据 -->
    
    <?php
    include 'data/data_fruit_list.php';
    header('content-type:text/html;charset=utf-8');
    // $arr[0] = array('href' => 'detail/detail1.php?flag=banana','path' => 'img/banana1.jpg','name' => '香蕉');
echo '<ul>';
    // print_r($arr);
    for($i=0;$i<count($arr);$i++){
        echo '<li>';
        echo '<a href="'.$arr[$i]['href'].'">点我看'.$arr[$i]['name'].'</a>';
        echo '<img src="'.$arr[$i]['path'].'" alt=""';
        echo '<span>'.$arr[$i]['name'].'</span>';
        echo '</li>';
    };
    echo '</ul>';
    ?>
</body>
</html>