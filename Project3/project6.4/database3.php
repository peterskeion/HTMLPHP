<?php
	$dataSourceName3 = 'mysql:host=localhost;dbname=registermanager';
	$username3 = 'someuser';
	$password3 = 'pa55word';

	//try connecting to DB
	try {
		$db3 = new PDO($dataSourceName3, $username3, $password3);
	}
	catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo 'Nope you do not have permission';
		exit();  //STAAAAHPP
	}
?>
