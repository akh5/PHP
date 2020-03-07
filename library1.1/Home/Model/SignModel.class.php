<?php
namespace Home\Model;
use \Frame\Libs\BaseModel;

class SignModel extends BaseModel
{
    public function sign()
    {
        if(!isset($_POST['submit'])){
           exit("错误执行");
        }//判断是否有submit操作
            
        $name=$_POST['sacc'];//post获取表单里的name
        $password=$_POST['spass'];//post获取表单里的password

        $sql = "INSERT INTO user(account,password) VALUES('{$name}','{$password}')";
        $res = $this->pdo->exec($sql);
        if($res){
            echo "<script>alert('注册成功')</script>";
            
            header("Location:index.php");
            }else{
                echo $name;
                echo $password;
                var_dump($res);
                echo mysqli_errno($res);
            }    
        
    }
}
?>
