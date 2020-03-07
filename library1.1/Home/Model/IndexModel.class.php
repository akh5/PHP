<?php
namespace Home\Model;
use \Frame\Libs\BaseModel;

class IndexModel extends BaseModel
{
    public function regin()
    {
        if(isset($_POST['submit'])){
            $name=$_POST['racc'];//post获取表单里的name
            $password=$_POST['rpass'];//post获取表单里的password
            $sql = "select password from user where account='$name'";
            $pass=$this->pdo->fetchOne($sql);
            if($password!=$pass['password'])
            {
             echo "<script>alert('用户名或密码错误')</script>";

            }else{
                $_SESSION['username'] = $name;
                $_SESSION['password'] = $password; 
                
                header("Location:?c=user");
            }
           
            
        }
    }
}