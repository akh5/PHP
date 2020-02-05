<?php
if(isset($_POST["token"])&&$_POST['token']=='uploads')
{
    $arr = $_FILES['uploads'];

    foreach($arr['name'] as $key=>$name)
    {
        if($name!="")
        {
            $ext = pathinfo($name,PATHINFO_EXTENSION);
            $temp = $arr['tmp_name'][$key];
            $dest = "./upload/".uniqid().".".$ext;
            move_uploaded_file($temp,$dest);
        }
    }
}
else
{
    echo "<h2>未选择文件</h2>";
}