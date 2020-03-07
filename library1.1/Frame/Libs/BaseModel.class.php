<?php
namespace Frame\Libs;

abstract class BaseModel
{
    protected $pdo = null;
    public function __construct()
    {
        $this->pdo = new \Frame\Vendors\PDOWrapper();
        
    }

    public static function getInstance()
    {
        $modelClassName = get_called_class();
        return new $modelClassName();
    } 
}