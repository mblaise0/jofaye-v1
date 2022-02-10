 
<?php 

require 'config.php';
//methods utilised for push notification
function fetchAll($query){
	$connection = new PDO(DBINFO, DBUSER, DBPASS);
	$stmt = $connection-> query($query);
	return $stmt->fetchAll();
}

function performQuery($query){
	$connection = new PDO(DBINFO, DBUSER, DBPASS);
	$stmt = $connection->prepare($query);
	if($stmt->execute()){
		return true;
	}else{
		return false;
	}
} 

?>