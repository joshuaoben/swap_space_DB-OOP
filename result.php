<?php 
class MYSQLIResult
{
	const FETCH_ARRAY = 0;
	const FETCH_ASSOC = 1;

	private $_result;

	public function __construct($db, $query)
	{
		$this->_result = mysqli_query($db, $query) or die(mysqli_error($db));
	}

	public function fetch($method = 0) {

		switch ($method) {
			case 0:
				# code...
				return mysqli_fetch_array($this->_result);
				break;
			
			case 1:
				# code...
				return mysqli_fetch_assoc($this->_result);
				break;

			default:
				# code..
			return mysqli_fetch_array($this->_result);
				break;
		}
		
	}
}

?>