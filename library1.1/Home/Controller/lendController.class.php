<?php
namespace HOME\Controller;

use \Frame\Libs\BaseController;
use \Home\Model\lendModel;
 
 final class lendController extends BaseController
 {
     public function index()
     {
        $modelObj = lendModel::getInstance();
        if(isset($_GET['b']))
        {
            $arr = $modelObj->lend();
        }
        if(isset($_GET['bn']))
        {
            $arr = $modelObj->lendByname();
        }
        $this->smarty->assign('arrs',$arr);
        $this->smarty->display(APP_PATH.DS."View".DS."lend.html");   
     }
 }
