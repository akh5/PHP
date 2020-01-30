<?php

//echo md5("dog");
$file = $_GET['f'];

$arr = array(
    '06d80eb0c50b49a509b49f2424e8c805'=>array('./dog.jpg','dog.jpg')
);

//浏览器内容为八位二进制数据流
header("Content-Type:application/octet-stream");
//数据处理方式为附件保存
header("Content-Disposition: attachment;filename=".$arr[$file][1]);

$handle = fopen($arr[$file][0],'rb');
$file_size = filesize($arr[$file][0]);
$filecount = 0;
while(!feof($handle)&&$filecount<$file_size)
{
    $out = fread($handle,1024);
    $filecount+=1024;
    echo $out;
}