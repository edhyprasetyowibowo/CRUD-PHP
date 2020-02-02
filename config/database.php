<?php 
 
$connection = new mysqli(
					"localhost", //nama host
					"root", //username
					"", //db pasword
					"tutor_crud_php" //db name
				);
 
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

return $connection;
 
?>