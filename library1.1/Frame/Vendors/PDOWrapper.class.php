<?php
namespace Frame\Vendors;
use \PDO;
use \Exception;
use \PDOException;

final class PDOWrapper
{
    private $db_type;
    private $db_host;
    private $db_port;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $charset;
    private $pdo = null;

    public function __construct()
    {
        $this->db_type = $GLOBALS['config']['db_type'];
        $this->db_host = $GLOBALS['config']['db_host'];
        $this->db_port = $GLOBALS['config']['db_port'];
        $this->db_user = $GLOBALS['config']['db_user'];
        $this->db_pass = $GLOBALS['config']['db_pass'];
        $this->db_name = $GLOBALS['config']['db_name'];
        $this->charset = $GLOBALS['config']['charset'];
        $this->createPDO(); //创建PDO对象
        $this->setErrMode();//设定报错模式
    }

    private function createPDO()
    {
        try{
            $dsn = "{$this->db_type}:host={$this->db_host};port={$this->db_port};dbname={$this->db_name};charset={$this->charset}";
            $this->pdo = new \PDO($dsn,$this->db_user,$this->db_pass);
        }catch(PDOException $e)
        {
            echo "<h2>创建pdo失败</h2><br>";
            echo "错误行号".$e->getLine()."<br>";
            echo "错误文件".$e->getFile()."<br>";
            echo "错误信息".$e->getMessage()."<br>";
            die();
        }
    }
    private function setErrMode()
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    public function exec($sql)
    {
        try{
            return $this->pdo->exec($sql);
        }catch(PDOException $e)
        {
            $this->showErr($e);
        }
    }
    public function fetchOne($sql)
    {
        try{
            $PDOStatement = $this->pdo->query($sql);
            return $PDOStatement->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e)
        {
            $this->showErr($e);
        }
    }
    public function fetchAll($sql)
    {
        try{
            $PDOStatement = $this->pdo->query($sql);
            return $PDOStatement->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e)
        {
            $this->showErr($e);
        }
    }
    public function rowCount($sql)
    {
        try{
            $PDOStatement = $this->pdo->query($sql);
            return $PDOStatement->rowCount();
        }catch(PDOException $e)
        {
            $this->showErr($e);
        }
    }
    private function showErr($e)
    {
        echo "<h2>执行sql语句失败</h2>";
        echo "错误行号".$e->getLine();
        echo "错误文件".$e->getFile();
        echo "错误信息".$e->getMessage();
        die();
    }
}