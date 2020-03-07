<?php
namespace Frame\Libs;

abstract class BaseController
{

    protected $smarty = null;

    public function __construct()
    {
        //创建smarty对象
        $smarty = new \Frame\Vendors\Smarty();
        $smarty->left_delimiter = "<{";
        $smarty->right_delimiter = "}>";
        $smarty->setCompileDir(sys_get_temp_dir().DS."blog_t".DS);
        $smarty->setTemplateDir(VIEW_PATH);
        $this->smarty = $smarty;
        
    }
}