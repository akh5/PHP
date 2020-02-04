<?php
if(isset($_POST["token"])&&$_POST['token']=='upload')
{
    if($_FILES['upload']['error']==0)
    {
        if($_FILES['upload']['size']>2*1024*1024)
        {
            echo "<h2>文件大小超过2M</h2>";
            die();
        }
        //获取文件后缀
        $ext = pathinfo($_FILES['upload']['name'],PATHINFO_EXTENSION);
        //临时文件
        $temp = $_FILES['upload']['tmp_name'];
        $dest = "./upload/".uniqid().".".$ext;
        //将临时文件移动到upload目录中
        move_uploaded_file($temp,$dest);
        echo"<h2>文件上传成功</h2>";
        die();
    }
}
else
{
    echo "<h2>未选择文件</h2>";
}