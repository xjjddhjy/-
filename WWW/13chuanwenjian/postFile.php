<?php
print_r($_FILES);

// Array ( 
//     [icon] => Array (
//          [name] => iceni96083.png 文件名
//           [type] => image/png 类型
//            [tmp_name] => C:\Windows\phpF019.tmp 
//              临时路径，接着文件就会消失
//             [error] => 0 错误编码
//               [size] => 162470 )   大小
// ) 
// 如果想要看那个临时文件，可以用sleep函数暂停一段时间
// 定义和用法
// move_uploaded_file() 函数将上传的文件移动到新位置。
// 若成功，则返回 true，否则返回 false。
// 语法
// move_uploaded_file(file,newloc)
// 参数	描述
// file	必需。规定要移动的文件。
// newloc	必需。规定文件的新位置。
move_uploaded_file($_FILES['icon']['tmp_name'],'./updataFile/'.
$_FILES['icon']['name']);
sleep(5);
// 如果要严谨一些，还需要判断文件类型
// 判断文件是否存在
// 判断文件大小
// 这些都是后端写的
?>