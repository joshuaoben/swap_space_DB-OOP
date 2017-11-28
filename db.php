<?php 
//include 'result.php';
class MYSQLIConnection
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

	public function _query($sql){
		$this->_result = new MYSQLIResult($this->_db, $sql);

		return $this->_result;
	}
}
?>