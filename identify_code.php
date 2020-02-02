<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
//将数字字母合并到一个数组
$arr = array_merge(range('A','Z'),range('a','z'),range('0','9'));
shuffle($arr); //打乱数组
//选出数组的前四位作为验证码
for($i=0;$i<4;$i++)
{
    $str.=$arr[$i];
}
//声明浏览器格式
header("Content-Type:image/png");
//创建画布
$width = 150;
$height = 50;
$img = imagecreatetruecolor($width,$height);
//设置随机颜色颜色
$color1 = imagecolorallocate($img,mt_rand(0,100),mt_rand(50,150),mt_rand(100,200));
$color2 = imagecolorallocate($img,mt_rand(150,255),mt_rand(150,255),mt_rand(150,255));
//ttf字体绝对路径
$fontpath = "E:/wamp64/www/day4/font/msyh.ttc";
//在画布中绘制矩形
imagefilledrectangle($img,0,0,$width,$height,$color1);
//添加ttf字体，生成随机的验证码
imagettftext($img,28,0,20,40,$color2,$fontpath,$str);
//生成许多个像素点作为干扰
for($i=0;$i<200;$i++)
{
    $color3 = imagecolorallocate($img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
    imagesetpixel($img,mt_rand(0,$width),mt_rand(0,$height),$color3);
}

//显示图像
imagepng($img);

//销毁图像
imagedestroy($img);
