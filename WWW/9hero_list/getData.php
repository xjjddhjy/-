<?php
include '../data/data_lol_detail.php';
// $heroArr =array(
//     '凯隐'=>array(
//     "champion_icon"=> "images/1498811286269.jpg",
//     "champion_name"=>"凯隐",
//     "champion_title"=>"影流之镰",
//     "champion_info"=>"孩童已死，杀手永存。”悉达·凯隐是修行暗影魔法的精英，他战斗的意义，是为了实现自己真正的命运——为了有朝一日能够率领影流教派，开创艾欧尼亚霸业的新世代。",
//     "champion_tags"=>"tags:打野，物理，坦克"
//     )
$hero=$heroArr[$_GET['lolHero']];
echo '<h2>'.$hero['champion_title'].'--<span>'.$hero['champion_name'].'</span></h2>';
echo '<img src="'.$hero['champion_icon'].'" alt=""></img>';
echo '<p>'.$hero['champion_info'].'</p>';
echo '<h3>'.$hero['champion_tags'].'</h3>'
?>
<a href="./index.php">我再考虑一下</a>