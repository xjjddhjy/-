<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lol图片数据读取</title>
    <style>
        img{
            width:140px;
            height:140px;
        }
    </style>
</head>
<body>
   <!-- 1 读取数据库数据 -->
   <!-- 2 解析数据
        3 生成html代码让数据好看 -->
    <?php
    include './data/data_lol_list.php';
    /*
    array(
    "champion_icon"=> "images/1498811286269.jpg",
    "champion_name"=>"凯隐",
    ),
    
    */ 
    echo '<ul>';
    for($i=0;$i<count($heroArr);$i++){
        echo '<li>';
        echo '<img src="'.$heroArr[$i]['champion_icon'].'" alt="">';
        echo '<a href="#">'.$heroArr[$i]['champion_name'].'</a>';
        
        echo '</li>';


    }
    echo '</ul>';
    
    
    ?>
</body>
</html>