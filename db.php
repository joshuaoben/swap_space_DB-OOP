<?php 
include 'result.php';
class DBconn
{
	private $_host;
	private $_dbname;
	private $_username;
	private $_password;
	private $_db;
	public $_result;

	public function  __construct($_host, $_username, $_password, $_dbname){
		$this->_db = mysqli_connect($_host, $_username, $_password, $_dbname) or die('unable to connect' . mysqli_error($_db));
	}

	public function getResult(){
		$this->_result = new Result($this->_db);
	}
}
?>