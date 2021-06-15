<?php
	require_once('database.php');

	$queryProducts = "SELECT * FROM productlist ORDER BY Name";

	$execStatement = $db->prepare($queryProducts);
	$execStatement->execute();

	$nameList = $execStatement->fetchAll();
	$execStatement->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div class="homeHeader">
    <h1>Sports Pro Technical Support</h1>
    <p>Sports Management software for the sports enthusiaist</p>
    <a href="index.html">Home</a>
    </div>


    <h1>Product List</h1>
		<form action="delete.php" method="post">
    <table>
      <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Version</th>
        <th>Release Date</th>
        <th> </th>
      </tr>
      <?php
        foreach($nameList as $products) {

          echo     '<tr>';
          echo  '<td>'.$products['Code'].'</td>';
          echo  '<td>'.$products['Name'].'</td>';
          echo  '<td>'.$products['Version'].'</td>';
          echo  '<td>'.$products['ReleaseDate'].'</td>';
          echo ' <td> <button type="submit" name="delete_buttons" value="'.$products['Code'].'">Delete</button> </td> ';
          echo '</tr>';

        }//end foreach
      ?>
    </table>
		</form>
    <a href="addproduct.php">Add Product</a>
  </body>
</html>
