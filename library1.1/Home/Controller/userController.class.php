<?php
 namespace HOME\Controller;

 use \Frame\Libs\BaseController;
 
 final class userController extends BaseController
 {
     public function index()
     {
        //  $modelObj = IndexModel::getInstance();
        $this->smarty->assign('username',$_SESSION['username']);
        $this->smarty->display(APP_PATH.DS."View".DS."user.html");
        if(isset($_POST['b']))
        {
            $bookcate = $_POST['b'];
            header("Location:?c=lend&b={$bookcate}");
        } if(isset($_POST['sear']))
        {
            $bookname = $_POST['sear'];
            header("Location:?c=lend&bn={$bookname}");
        } 
     }
 }

