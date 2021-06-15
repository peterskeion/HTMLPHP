

<div class="homeHeader">
<h1>Sports Pro Technical Support</h1>
<link rel="stylesheet" href="main.css">
<p>Sports Management software for the sports enthusiaist</p>
<a href="index.html">Home</a>
<hr>
</div>
<h1>Customer Search</h1>
<form action="managecustomers.php" method="post">
  <label for="searchText">Last Name</label> <input type="text" name="searchText" id="searchText"> <input type="submit" name="search_button" value="Search">
</form>

<?php

$searchText=$_POST['searchText'];

require_once('database.php');

$queryCustomers = "SELECT * FROM customerlist WHERE lastName='$searchText' ";

$execStatement = $db->prepare($queryCustomers);
$execStatement->execute();

$nameList = $execStatement->fetchAll();
$execStatement->closeCursor();





if (strlen($searchText)!=0) {
  echo "<h2>Results</h2>";

echo " <form action='select.php' method='post'> ";
echo   " <table>";
echo     " <tr>";
echo     " <th>Name</th>";
echo  "<th>Email Address</th>";
echo  "<th>City</th>";
echo   " <th> </th>";
echo " </tr>";

        foreach($nameList as $customers) {
          echo  '<tr>';
          echo  '<td>'.$customers['firstName'].' '.$customers['lastName'].'</td>';
          echo  '<td>'.$customers['email'].'</td>';
          echo  '<td>'.$customers['city'].'</td>';
          echo ' <td> <button type="submit" name="select_Button" value="'.$customers['email'].'">Select</button> </td> ';
          echo '</tr>';
        }//end foreach
echo    "</table>";
echo		"</form>";
}

 ?>
 <hr>
