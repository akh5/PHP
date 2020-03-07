<?php
namespace HOME\Controller;

use Frame\Libs\BaseController;
use Home\Model\IndexModel;
use Home\Model\SignModel;

final class IndexController extends BaseController
{
    public function index()
    {
        $modelObj = IndexModel::getInstance();
        //$this->smarty->assign("arrs",$arrs);
        $modelObj->regin();
        $this->smarty->display(APP_PATH.DS."View".DS."Library.html");
        
    }
    public function sign()
    {
        $modelObj = SignModel::getInstance();
        $modelObj->sign();
    }
}
    ?>