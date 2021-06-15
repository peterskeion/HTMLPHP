<?php
	require_once('database.php');

	//get user input
	$code = filter_input(INPUT_POST, 'code_entry');
	$code = htmlspecialchars($code);

	$name = filter_input(INPUT_POST, 'name_entry');
	$name = htmlspecialchars($name);

	$version = filter_input(INPUT_POST, 'version_entry');
	$version = htmlspecialchars($version);

  $releaseDate = filter_input(INPUT_POST, 'releaseDate_entry');
  $releaseDate = htmlspecialchars($releaseDate);

	$queryProducts = "SELECT * FROM productlist WHERE Code=:code_entry";

	$execStatement = $db->prepare($queryProducts);
	$execStatement->bindValue(':code_entry', $code);
	$execStatement->execute();

	$productList = $execStatement->fetchAll();
	$prodRowCount = $execStatement->rowCount();
	$execStatement->closeCursor();

if( strlen($code)!=0	&& strlen($name)!=0	&& strlen($version)!=0 && strlen($version)!=0 ){

$checkEmpty=True;

	//if 0 rows, then this is new
	if($prodRowCount == 0) {   //perform an insert
		$queryInsert = "INSERT INTO productlist
							   (Code,Name,Version,ReleaseDate)
						VALUES
							   (:code_entry, :name_entry, :version_entry,:releaseDate_entry)";
		$insertStatement = $db->prepare($queryInsert);

		$insertStatement->bindValue(':code_entry', $code);
		$insertStatement->bindValue(':name_entry', $name);
		$insertStatement->bindValue(':version_entry', $version);
    $insertStatement->bindValue(':releaseDate_entry', $releaseDate);

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
				}
				else {
					echo "Your string was missing something please go back and try again";
				}
		 ?>

    <a href="manageProducts.php"> To go back to the projects menu</a>
  </body>
</html>
