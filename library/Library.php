<?php
        if(isset($_POST['submit'])){
            $name=$_POST['racc'];//post获取表单里的name
            $password=$_POST['rpass'];//post获取表单里的password

            $link = mysqli_connect('localhost','root','');
            if(!$link){
                exit('数据库链接失败');
            }

            mysqli_set_charset($link,'utf8');

            mysqli_select_db($link,'library');

            $sql = "select Password from student where Name='$name'";

            $res = mysqli_query($link,$sql);

            $pass=mysqli_fetch_row($res);

            if($password!=$pass[0])
            {
                echo "<script>alert('用户名或密码错误')</script>";

            }else{
                header("Location:user.php?racc=$name");
            }


        }
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
        <div class="icon"><div><img src="img/男同学.png"></div>请登陆后使用</div>
    </div>

    <div class="container">
        <div class="com"></div>
        <div class="search">
            <form>
                <input type="text" placeholder="请输入书名">
            </form>
            <div>
                <img src="img/search.png">
            </div>
        </div>
        <div class="site">
            <div class="sall">全部图书分类</div>
            <div class="style s">国内文学</div>
            <div class="style s">国外文学</div>
            <div class="style s">小说</div>
            <div class="style s">漫画</div>
            <div class="style s">科学技术</div>
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
    <div class="regin">
        <p>密码登陆</p>
        <form method="POST">
            <div><img src="img/admin.png"><input class="racc" name="racc" type="text" placeholder="请输入用户名"></div>
            <div><img src="img/密码.png"><input class="rpass" name="rpass" type="password" placeholder="请输入密码"></div>
            <label><div class="rin"><pre>登    录</pre><input type="submit" name="submit" value=" "style="display: none"></div></label>
        </form>
            <div style="margin-top: 15px"><p style="font-size: 15px; font-weight:normal;display: inline">还没有账号？</p><button style="display: inline" id="rsi">立即注册</button></div>
            <div class="close"><img src="img/close_circle.png"></div>
    </div>
    <div class="sign">
        <p>新用户注册</p>
        <form action="signup.php" method="POST">
        <div>用  户  名：<input class="sacc" name="sacc" type="text" placeholder="请输入账号"></div>
        <div>密       码：<input class="spass" name="spass" type="password" placeholder="请输入密码"></div>
        <div>确认密码：<input class="spass" type="password" placeholder="请再次输入密码"></div>
        <label><div class="sin">注    册<input type="submit" name="submit" value=" " style="display: none"></div></label>
        <div class="close"><img src="img/close_circle.png"></div>
        </form>

    </div>
    <script src="picture.js"></script>
    <script src="regin.js"></script>

</body>
</html>