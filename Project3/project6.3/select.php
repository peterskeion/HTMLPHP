<?php session_start(); ?>
<?php
require_once('database.php');

$customerEmail=$_POST['select_Button'];

$queryCustomers = "SELECT * FROM customerlist WHERE email='$customerEmail' LIMIT 1";

$execStatement = $db->prepare($queryCustomers);
$execStatement->execute();

$nameList = $execStatement->fetchAll();
	$execStatement->closeCursor();
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

<?php
foreach($nameList as $customers) {
      $_SESSION['newsession']=$customers['email'];}
				?>

    <form method="post" action="updateCustomer.php">
    <label for="firstName_entry">First Name:</label>
    <?php foreach($nameList as $customers) {
          echo "<input type='text' value='".$customers['firstName']."' id='firstName_entry' name='firstName_entry'>"; } ?>
    <br>
    <label for="lastName_entry">Last Name:</label>
    <?php foreach($nameList as $customers) {
          echo "<input type='text' value='".$customers['lastName']."' id='lastName_entry' name='lastName_entry'>"; } ?>
    <br>
    <label for="address_entry">Address:</label>
    <?php foreach($nameList as $customers) {
          echo "<input type='text' value='".$customers['address']."' id='address_entry' name='address_entry'>"; } ?>
    <br>
    <label for="city_entry">City:</label>
    <?php foreach($nameList as $customers) {
          echo "<input type='text' value='".$customers['city']."' id='city_entry' name='city_entry'>"; } ?>
    <br>
    <label for="state_entry">State:</label>
    <?php foreach($nameList as $customers) {
          echo "<input type='text' value='".$customers['state']."' id='state_entry' name='state_entry'>"; } ?>
    <br>
    <label for="postalCode_entry">Postal Code:</label>
    <?php foreach($nameList as $customers) {
          echo "<input type='text' value='".$customers['postalCode']."' id='postalCode_entry' name='postalCode_entry'>"; } ?>
    <br>
    <label for="countryCode_entry">State:</label>
    <?php foreach($nameList as $customers) {
          echo "<input type='text' value='".$customers['countryCode']."' id='countryCode_entry' name='countryCode_entry'>"; } ?>
    <br>
    <label for="phone_entry">Phone:</label>
    <?php foreach($nameList as $customers) {
          echo "<input type='text' value='".$customers['phone']."' id='phone_entry' name='phone_entry'>"; } ?>
    <br>
    <label for="email_entry">Email:</label>
    <?php foreach($nameList as $customers) {
          echo "<input type='text' value='".$customers['email']."' id='email_entry' name='email_entry'>"; } ?>
    <br>
    <label for="password_entry">Password:</label>
    <?php foreach($nameList as $customers) {
          echo "<input type='text' value='".$customers['password']."' id='password_entry' name='password_entry'>"; } ?>
    <br>

    <input type="submit" value="Update Customer">
  </form>

<br>
<br>
<hr>
<a href="managecustomers.php">Search Customers</a>

  </body>
</html>
