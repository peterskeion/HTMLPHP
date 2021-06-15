<?php session_start(); ?>
<?php

require_once('database.php');



$oldEmail=$_SESSION['newsession'];

  $firstName = filter_input(INPUT_POST, 'firstName_entry');
	$firstName = htmlspecialchars($firstName);

	$lastName = filter_input(INPUT_POST, 'lastName_entry');
	$lastName = htmlspecialchars($lastName);

	$address= filter_input(INPUT_POST, 'address_entry');
	$address = htmlspecialchars($address);

  $city = filter_input(INPUT_POST, 'city_entry');
  $city = htmlspecialchars($city);

  $state = filter_input(INPUT_POST, 'state_entry');
  $state = htmlspecialchars($state);

  $postalCode = filter_input(INPUT_POST, 'postalCode_entry');
	$postalCode = htmlspecialchars($postalCode);

	$countryCode = filter_input(INPUT_POST, 'countryCode_entry');
	$countryCode = htmlspecialchars($countryCode);

  $phone = filter_input(INPUT_POST, 'phone_entry');
  $phone = htmlspecialchars($phone);

	$email= filter_input(INPUT_POST, 'email_entry');
	$email = htmlspecialchars($email);

  $passwordA = filter_input(INPUT_POST, 'password_entry');
  $passwordA = htmlspecialchars($passwordA);


  		$queryUpdate ="UPDATE customerlist
  						SET firstName='$firstName',lastName='$lastName', address='$address', city='$city', state='$state', postalCode='$postalCode', countryCode='$countryCode', phone='$phone', email='$email', password='$passwordA'
              WHERE email='$oldEmail' ";

    	$updateStatement = $db->prepare($queryUpdate);
  		$updateStatement->execute();


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if($updateStatement)
    { header("location:managecustomers.php");
      exit;


    }?>
  </body>
</html>
