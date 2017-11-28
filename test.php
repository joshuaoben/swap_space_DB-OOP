<?php 
include 'db.php';
include 'result.php';

$db = new MYSQLIConnection();

$result = $db->_query("SELECT * FROM test");

while($row = $result->fetch(MYSQLIResult::FETCH_ARRAY)) {
var_dump($row);
}
?>