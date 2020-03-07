<?php
namespace Home\Model;
use \Frame\Libs\BaseModel;

class borrowModel extends BaseModel
{
    public function borrow()
    {
		$name = $_SESSION['username'];
		$bookname = $_GET['bn'];
		$sql1 = "SELECT * FROM books WHERE BookName='$bookname'";
		$arr = $this->pdo->fetchOne($sql1);
		$newnumber = $arr['SurplusQuantity']-1;
		$sql2 = "UPDATE books SET SurplusQuantity = '$newnumber' WHERE BookName='$bookname'";
		$this->pdo->exec($sql2);
		$sql3 = "INSERT INTO userbook(user,BookName) VALUES('$name','$bookname') ";
		$this->pdo->exec($sql3);
	}
	public function show()
	{
		$name = $_SESSION['username'];
		$sql = "SELECT BookName FROM userbook WHERE user='$name'";
		return $this->pdo->fetchAll($sql);
	}
	public function back()
	{
		$name = $_SESSION['username'];
		$bookname = $_GET['bn'];
		$sql1 = "SELECT * FROM books WHERE BookName='$bookname'";
		$arr = $this->pdo->fetchOne($sql1);
		$newnumber = $arr['SurplusQuantity']+1;
		$sql2 = "UPDATE books SET SurplusQuantity = '$newnumber' WHERE BookName='$bookname'";
		$this->pdo->exec($sql2);
		$sql3 = "DELETE FROM userbook WHERE BookName='$bookname'AND user='$name' ";
		$this->pdo->exec($sql3);
	}
	
}
