<?php
$sort = $_GET['b'];
$name = $_GET['users'];
$link = mysqli_connect('localhost','root','');
if(!$link){
	exit('数据库链接失败');
}

mysqli_set_charset($link,'utf8');

mysqli_select_db($link,'library');

echo mysqli_error($link);

$sql = "SELECT * FROM book WHERE Category='$sort' AND SurplusQuantity>0";

$obj = mysqli_query($link,$sql);

var_dump($obj);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>借书</title>
    <style>
        body{
            background-image: url("img/ebe6e4199ff34090653bbabc5a885ccf.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        div{
            position: absolute;
            margin-top: 50px;
            width: 1200px;
            height: 700px;
            border: #963bec solid;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            background-color: wheat;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div>
    <?php
    echo "<table width='1000px' border='1'>";
        echo "<th>书号</th><th>书名</th><th>类别</th><th>借阅状态</th><th>剩余数量</th><th>操作</th>";
        while($rows = mysqli_fetch_assoc($obj)){
            echo "<tr>";
                echo "<td>".$rows['Number']."</td>";
                echo "<td>".$rows['BookName']."</td>";
                echo "<td>".$rows['Category']."</td>";
                $bname = $rows['BookName'];
                echo "<td>".$rows['BorrowingState']."</td>";
                echo "<td>".$rows['SurplusQuantity']."</td>";
                echo "<td><a href='borrow.php?user=$name&bn=$bname'>借书</a></td>";
            echo "</tr>";
        }
    echo "</table>";
    
    ?>

</div>

</body>
</html>