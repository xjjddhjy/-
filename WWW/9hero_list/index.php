<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta charset="utf-8">
  <!-- ie 按照 最新的 方式渲染 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- 视口 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <!--<link href="lib/css/bootstrap.min.css" rel="stylesheet">-->
  <!-- bootstrap的 样式 -->
  <link href="lib/css/bootstrap.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- 兼容 ie9
    html5shiv html5的新语义标签
    respond 低版本的ie中 不支持 媒体查询 @media
   -->
  <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    img {
      width: 242px;
      height: 200px !important;
    }

    .panel-body {
      background-color: skyblue;
    }
  </style>
</head>

<body>
  <!-- bootstrap用法
    去https://v3.bootcss.com/找到喜欢的样式
  比如 
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
然后在其包一个容器类<div class="containter"></div>
不包也行，包了好管理-->
  <!--
        步骤
          0.静态页==>动态页
          1.访问数据库=>假数据
          2.解析数据 
            $arr = array();
            $arr[0] = array('href' => 'detail/detail1.php?flag=banana','path' => 'img/banana1.jpg','name' => '香蕉');
          3.生成 前端程序员写好的 html结构
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="./images/1371093644361.png" alt="...">
            <div class="caption">
              <h3>亚索</h3>
              
              <p><a href="#" class="btn btn-primary" role="button">购买</a> 
                <a href="#" class="btn btn-default"
                  role="button">查看详情</a></p>
            </div>
          </div>
        </div>      -->

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">lol-hero</h3>
    </div>
    <div class="panel-body">
      <div class="containter">
        <div class="row">
          <?php
        //  引入文件
        include '../data/data_lol_list.php';
        // 解析数据
        for($i=0;$i<count($heroArr);$i++){
          // getData.php其实就是后台，实现点击按钮发送数据，很关键
          echo '
          <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="'.$heroArr[$i]['champion_icon'].'" alt="...">
            <div class="caption">
              <h3>'.$heroArr[$i]['champion_name'].'</h3>
              
              <p><a href="#" class="btn btn-primary" role="button">购买</a> 
                <a href="getData.php?lolHero='.
                $heroArr[$i]['champion_name'].
                '" class="btn btn-default"
                  role="button">查看详情</a></p>
            </div>
          </div>
        </div> ';
        }
        ?>
        
        </div>
      </div>
    </div>
  </div>
  </div>

</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>