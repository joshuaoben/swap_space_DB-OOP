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

	

	public function  __construct(){
		include 'db_config.php';
		extract($config);
		$this->_db = mysqli_connect($host, $user, $password, $dbname) or die('unable to connect' . mysqli_error($this->_db));
	}

	public function getResult(){
		return $this->_result = new Result($this->_db);
	}
}
?>