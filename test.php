<?php 
include 'db.php';
$fetch = new DBconn();
$gotten = $fetch->getResult();
print_r($gotten);


?>