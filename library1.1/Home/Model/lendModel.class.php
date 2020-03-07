<?php
namespace Home\Model;
use \Frame\Libs\BaseModel;

class lendModel extends BaseModel
{
    public function lend()
    {
        
       $bookcate = $_GET['b'] ;
       $sql = "SELECT * FROM books WHERE Category='$bookcate' AND SurplusQuantity>0";
       return $this->pdo->fetchAll($sql);
    }
    public function lendByname()
    {
       $bookname = $_GET['bn'] ;
       $sql = "SELECT * FROM books WHERE BookName='$bookname' AND SurplusQuantity>0";
       return $this->pdo->fetchAll($sql);
    }
}