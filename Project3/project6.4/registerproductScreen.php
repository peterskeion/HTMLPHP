<?php session_start(); ?>
<?php
require_once('database.php');
require_once('database2.php');

$email = filter_input(INPUT_POST, 'email_entry');
$email = htmlspecialchars($email);

	$queryEmail = "SELECT * FROM customerlist WHERE email='$email' LIMIT 1";
  $execStatement = $db->prepare($queryEmail);
  $execStatement->execute();
  $listItems = $execStatement->fetchAll();
  $execStatement->closeCursor();



  $queryProucts = "SELECT * FROM productlist ORDER BY Code";
  $exec2Statement = $db2->prepare($queryProucts);
  $exec2Statement->execute();
  $productItems = $exec2Statement->fetchAll();
  $exec2Statement->closeCursor();


 ?>


 <?php
foreach($listItems as $customers) {
      $_SESSION['cemail']=$customers['email'];
			$_SESSION['cName']= $customers['firstName']." ".$customers['lastName'];
    }
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

    <h2>Register Product</h2>
<form  action="registerproductScreenpart2.php" method="post">


  <?php
    if($queryEmail)
    {
      foreach($listItems as $customers) {
      echo "Customer:".$customers['firstName']."  ".$customers['lastName'];}
      echo "<br>";
      echo  "<label for='productDropdown'>Register a product:</label>";
      echo    "<select name='productDropdown'>";
         foreach($productItems as $products) {
          echo "<option value='".$products['Code']."' >".$products['Name']. "</option>";
        }
      echo "</select>";
    }
    else {
      echo "<p>Email Rejected Please go back</p>";
      echo '<a href="registerproduct">Back to customerLogin</a>>';
    }
  ?>
  <input type="submit" name="enter_Button" value="Register Product">
  </form>
    <hr>

  </body>
</html>
