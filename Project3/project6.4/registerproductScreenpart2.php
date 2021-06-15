<?php session_start(); ?>
<?php
require_once('database2.php');
require_once('database3.php');

$code=$_POST['productDropdown'];

  $queryProucts = "SELECT * FROM productlist WHERE Code='$code'";
  $exec2Statement = $db2->prepare($queryProucts);
  $exec2Statement->execute();
  $productItems = $exec2Statement->fetchAll();
  $exec2Statement->closeCursor();


$customerEmail=$_SESSION['cemail'];
$customerName=	$_SESSION['cName'];


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
    <?php

     foreach($productItems as $products) {

       $queryInsert="INSERT INTO registerlist
                    (name,email,registeredproducts)
                    VALUES
       (:customerName,:customerEmail,:registeredproducts) ";
       $updateStatement = $db3->prepare($queryInsert);

       $updateStatement->bindValue(':customerName', $customerName);
       $updateStatement->bindValue(':customerEmail', $customerEmail);
       $updateStatement->bindValue(':registeredproducts', $products['Name']);

       $updateStatement->execute();


       if($queryInsert)
      { echo "Product(".$products['Code'].") was registered sucessfully";}




     }


     ?>
