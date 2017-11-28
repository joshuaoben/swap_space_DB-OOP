<?php 
class Result
{

	private $_result;

	public function __construct($db)
	{
		$db_query = mysqli_query($db, "SELECT * FROM test") or die(mysqli_error($db));
		return $this->_result= mysqli_fetch_array($db_query);
	}

	
}

?>