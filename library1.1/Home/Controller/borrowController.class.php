<?php
namespace HOME\Controller;
use \Frame\Libs\BaseController;
use \Home\Model\borrowModel;

final class borrowController extends BaseController
{
    public function index()
    {
       $modelObj = borrowModel::getInstance();
       $arr = $modelObj->show();
    //    var_dump($arr);
       $this->smarty->assign('username',$_SESSION['username']);
       $this->smarty->assign('arrs',$arr);
       $this->smarty->display(APP_PATH.DS."View".DS."borrow.html");
    }
    public function borrow()
    {
       $modelObj = borrowModel::getInstance();
       $modelObj->borrow();
       $arr = $modelObj->show();
    //    var_dump($arr);
       $this->smarty->assign('username',$_SESSION['username']);
       $this->smarty->assign('arrs',$arr);
       $this->smarty->display(APP_PATH.DS."View".DS."borrow.html");
    }
    public function back()
    {
       $modelObj = borrowModel::getInstance();
       $modelObj->back();
       $arr = $modelObj->show();
    //    var_dump($arr);
       $this->smarty->assign('username',$_SESSION['username']);
       $this->smarty->assign('arrs',$arr);
       $this->smarty->display(APP_PATH.DS."View".DS."borrow.html");
    }
}
