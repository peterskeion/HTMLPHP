<?php
	require_once('database.php');

	$queryTechnician = "SELECT * FROM technicianlist ORDER BY firstName";

	$execStatement = $db->prepare($queryTechnician);
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

<hr  noshade>

    <h1>Technician List</h1>
		<form action="delete.php" method="post">
    <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Password</th>

        <th> </th>
      </tr>
      <?php
        foreach($nameList as $technicians) {

          echo  '<tr>';
          echo  '<td>'.$technicians['firstName'].'</td>';
          echo  '<td>'.$technicians['lastName'].'</td>';
          echo  '<td>'.$technicians['email'].'</td>';
          echo  '<td>'.$technicians['phone'].'</td>';
          echo  '<td>'.$technicians['password'].'</td>';
          echo ' <td> <button type="submit" name="delete_buttons" value="'.$technicians['email'].'">Delete</button> </td> ';
          echo '</tr>';

        }//end foreach
      ?>
    </table>
		</form>
    <a href="addtechnician.php">Add Technician</a>
    <hr  noshade>
  </body>
</html>
