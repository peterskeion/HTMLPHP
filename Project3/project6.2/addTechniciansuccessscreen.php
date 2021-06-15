<?php
	require_once('database.php');

	//get user input
	$firstName = filter_input(INPUT_POST, 'firstName_entry');
	$firstName = htmlspecialchars($firstName);

	$lastName = filter_input(INPUT_POST, 'lastName_entry');
	$lastName = htmlspecialchars($lastName);

	$email= filter_input(INPUT_POST, 'email_entry');
	$email = htmlspecialchars($email);

  $phoneNumber = filter_input(INPUT_POST, 'phone_entry');
  $phoneNumber = htmlspecialchars($phoneNumber);

  $passwordA = filter_input(INPUT_POST, 'password_entry');
  $passwordA = htmlspecialchars($passwordA);

	$queryTechnician = "SELECT * FROM technicianlist WHERE firstName=:firstName_entry";

	$execStatement = $db->prepare($queryTechnician);
	$execStatement->bindValue(':firstName_entry', $firstName);
	$execStatement->execute();

	$productList = $execStatement->fetchAll();
	$prodRowCount = $execStatement->rowCount();
	$execStatement->closeCursor();

if( strlen($firstName)!=0	&& strlen($lastName)!=0	&& strlen($email)!=0 && strlen($phoneNumber)!=0 && strlen($passwordA)!=0 ){

$checkEmpty=True;

	//if 0 rows, then this is new
	if($prodRowCount == 0) {   //perform an insert
		$queryInsert = "INSERT INTO technicianlist
							   (firstName,lastName,email,phone,password)
						VALUES
							   (:firstName_entry, :lastName_entry, :phone_entry,:email_entry,:password_entry)";
		$insertStatement = $db->prepare($queryInsert);

		$insertStatement->bindValue(':firstName_entry', $firstName);
		$insertStatement->bindValue(':lastName_entry', $lastName);
		$insertStatement->bindValue(':phone_entry', $email);
    $insertStatement->bindValue(':email_entry', $phoneNumber);
    $insertStatement->bindValue(':password_entry', $passwordA);

		$insertStatement->execute();
	}
}
	else{
			$checkEmpty=False;


	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <div class="homeHeader">
    <h1>Sports Pro Technical Support</h1>
    <p>Sports Management software for the sports enthusiaist</p>
    <a href="index.html">Home</a>
    </div>

<br>
<br>
<br>
<br>
		<?php
				if($checkEmpty)
				{
					echo "Your Item was added successfully";
          echo "<a href='managetechnicians.php'> To go back to the Technician menu</a>";
				}
				else {
					echo "Your string was missing something please go back and try again";
            echo "<a href='addtechnician.php'> To go back to the add technician menu</a>";
				}
		 ?>


  </body>
</html>
