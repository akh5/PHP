<?php
define('DS',DIRECTORY_SEPARATOR);//动态斜线
define('ROOT_PATH',getcwd().DS);//网站根目录
define('APP_PATH',ROOT_PATH.'Home'.DS);
define('IMG_PATH',ROOT_PATH."Public".DS);
require_once(ROOT_PATH.'Frame'.DS.'Frame.class.php');
session_start();

//echo ROOT_PATH."Public".DS."img";
Frame\Frame::run();
//echo ROOT_PATH."Frame".DS."Vendors".DS."smarty".DS."libs".DS."Smarty.class.php";