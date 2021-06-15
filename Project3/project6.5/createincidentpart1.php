<?php session_start(); ?>
<?php
require_once('database.php');
$email = filter_input(INPUT_POST, 'email_entry');
$email = htmlspecialchars($email);

$queryEmail = "SELECT * FROM registerlist WHERE email='$email' LIMIT 1";
$execStatement = $db->prepare($queryEmail);
$execStatement->execute();
$listItems = $execStatement->fetchAll();
$execStatement->closeCursor();


$queryRegister = "SELECT * FROM registerlist WHERE email='$email'";
$execStatement = $db->prepare($queryRegister);
$execStatement->execute();
$registerlist = $execStatement->fetchAll();
$execStatement->closeCursor()
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="homeHeader">
    <h1>Sports Pro Technical Support</h1>
    <p>Sports Management software for the sports enthusiaist</p>
    <a href="index.html">Home</a>
    <hr>
    </div>

<h2>Create Incident</h2>
<form action="incidentsuccess.php" method="post">
<?php

if(count($registerlist) > 1 ){
if($queryEmail)
    {

      foreach($listItems as $customers) {
        $_SESSION['nameofCustomer']=$customers['name'];
        echo "Customer: "." ".$customers['name'];
        echo "<br>";
        echo "Product: ";
        echo    "<select name='productDropdown'>";
          foreach($registerlist as $registered){
          echo "<option value='".$registered['registeredproducts']."' >".$registered['registeredproducts']. "</option>";
          }
        echo    "</select>";

        echo "<br>";
        echo '<label for="title_input">Title</label><input type="text" name="title_input" value="">';
        echo "<br>";
        echo '<label for="text_input">Description: </label><textarea name="text_input" ></textarea>';
        }
      }


    else {
      echo "that is not a valid user";
    }
}
else {
  echo "This user has yet to register a product or is not a user please go back and choose a user";
}

 ?>
 <br>
 <input type="submit" name="submit_Button" value="Create Incident">
</form>
<hr>

  </body>
</html>
