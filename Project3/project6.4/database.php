<?php
	$dataSourceName = 'mysql:host=localhost;dbname=customermanager';
	$username = 'someuser';
	$password = 'pa55word';

	//try connecting to DB
	try {
		$db = new PDO($dataSourceName, $username, $password);
	}
	catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo 'Nope you do not have permission';
		exit();  //STAAAAHPP
	}
?>
