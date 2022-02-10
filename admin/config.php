  
<?php

define('DBINFO','mysql:host=localhost;dbname=jofayedb');
define('DBUSER','root');
define('DBPASS','inspired');


//crud add, delete, edit
$options = [];
 
try {
$connection = new PDO(DBINFO, DBUSER, DBPASS, $options);
} catch(PDOException $e) {
	
}

?>
