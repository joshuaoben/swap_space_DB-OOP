<?php 
class Result
{

	private $_result;
	
	public function __construct($db)
	{
		$this->_result = mysqli_query($db, "SELECT * FROM product") or die(mysqli_error($db));
	}

	
}

?>