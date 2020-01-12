<?php
 $name = $_GET['racc'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图书管理by马鹏飞李家亮</title>
    <link href="Lib.css" type="text/css" rel="stylesheet">
    <link href="regin.css" type="text/css" rel="stylesheet">
    <link href="sign.css" type="text/css" rel="stylesheet">
    <link href="site.css" type="text/css" rel="stylesheet">
    <link href="picture.css" type="text/css" rel="stylesheet">

</head>
<body>
    <img class="up" src="img/up.jpg">
    <div class="brow">
        欢迎使用本网站借阅书籍
        <div class="icon"><div><img src="img/男同学.png"><a href="user_book.php?users=<?php echo$name?>"></div><?php echo $name;?></a></div>
    </div>

    <div class="container">
        <div class="com"></div>
        <div class="search">
            <form action="lend_byname.php" method="GET">
            <input name="users" type="text" value="<?php echo $name;?>" style="display: none">
            <input type="text" name="sear" placeholder="请输入书名">
            
            <div style="cursor: pointer;">
                <label><img src="img/search.png" style="cursor: pointer;"><input type="submit" style="display: none;"></label>
            </div>
        </form>
        </div>
        <div class="site">
            <form action="lend.php" method="GET">
            <div class="sall">全部图书分类</div>
            <input name="users" type="text" value="<?php echo $name;?>" style="display: none">
            <label><div class="style s">国内文学<input class="btn" name="b" type="submit" style="display: none" value="contry"></div></label>
            <label><div class="style s">国外文学<input class="btn" name="b" type="submit" style="display: none" value="forign"></div></label>
            <label><div class="style s">小说<input class="btn" name="b" type="submit" style="display: none" value="novel"></div></label>
            <label><div class="style s">漫画<input class="btn" name="b" type="submit" style="display: none" value="comic"></div></label>
            <label><div class="style s">科学技术<input class="btn" name="b" type="submit" style="display: none" value="since"></div></label>
            <input id="su" type="submit" style="display: none;">
            </form>
        </div>
        <div class="picture">
            <img class="images active" src="img/1.jpg">
            <img class="images" src="img/2.jpg">
            <img class="images" src="img/3.jpg">
            <div class="left">&lt;</div>
            <div class="right">&gt;</div>
        </div>
        <div class="recom">新品推荐<img src="img/4.jpg"></div>
        <div class="un1"><img src="img/2019122315482941183.jpg"><div>公告区域</div></div>
        <div class="books">
            <ul>
                <li><img src="img/b1.jpg"></li>
                <li><img src="img/b2.jpg"></li>
                <li><img src="img/b3.jpg"></li>
                <li><img src="img/b4.jpg"></li>
                <li><img src="img/b5.jpg"></li>
                <li><img src="img/b6.jpg" style="position: relative;left: -250px;"></li>
            </ul>
        </div>
        <div class="under">
            联系我们
            <a href="#">管理员入口</a>
        </div>
    </div>

    <div class="line"></div>
    <div class="shadow"></div>

    <script src="picture.js"></script>
    <script>
            var btn = document.getElementsByClassName("btn");
            var sub = document.getElementById("su");
            
            btn[0].onclick = function(){
                sub.click();
            }
            btn[1].onclick = function(){
                sub.click();
            }
            btn[2].onclick = function(){
                sub.click();
            }
            btn[3].onclick = function(){
                sub.click();
            }
            btn[4].onclick = function(){
                sub.click();
            }
    </script>


</body>
</html>