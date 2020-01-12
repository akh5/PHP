<?php
$bname = $_GET['bn'];
$name = $_GET['user'];
$link = mysqli_connect('localhost','root','');
if(!$link){
	exit('数据库链接失败');
}

mysqli_set_charset($link,'utf8');

mysqli_select_db($link,'library');

echo mysqli_error($link);

$sql1 = "SELECT * FROM Book WHERE BookName='$bname'";

$obj1 = mysqli_query($link,$sql1);

$rows = mysqli_fetch_assoc($obj1);

// echo $rows['SurplusQuantity'];

$newnumber = $rows['SurplusQuantity']-1;

$sql2 = "UPDATE book SET SurplusQuantity = '$newnumber' WHERE BookName='$bname'";

mysqli_query($link,$sql2);

$sql3 = "INSERT INTO student_book(Name,BookName) VALUES('$name','$bname') ";

mysqli_query($link,$sql3);

header("Location:user_book.php?users=$name")

?>