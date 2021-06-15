<?php
	$dataSourceName2 = 'mysql:host=localhost;dbname=productmanager';
	$username2 = 'someuser';
	$password2 = 'pa55word';

	//try connecting to DB
	try {
		$db2 = new PDO($dataSourceName2, $username2, $password2);
	}
	catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo 'Nope you do not have permission';
		exit();  //STAAAAHPP
	}
?>
