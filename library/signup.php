<?php
if(!isset($_POST['submit'])){
    exit("错误执行");
}//判断是否有submit操作

$name=$_POST['sacc'];//post获取表单里的name
$password=$_POST['spass'];//post获取表单里的password

$link = mysqli_connect('localhost','root','');
if(!$link){
	exit('数据库链接失败');
}
mysqli_set_charset($link,'utf8');

mysqli_select_db($link,'library');
echo mysqli_error($link);

$sql = "INSERT INTO student(Name,Password) VALUES('{$name}','{$password}')";

// $sql = str_replace("\xe2\x80\x8b", '', $sql);

$res = mysqli_query($link,$sql);

if($res){
echo "<script>alert('注册成功')</script>";

header("Location:user.php?racc=$name");
}else{
    echo $name;
    echo $password;
    var_dump($res);
    echo mysqli_errno($res);
}

?>
