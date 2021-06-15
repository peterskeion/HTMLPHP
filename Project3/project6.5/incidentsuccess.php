<?php session_start(); ?>
<?php
require_once('database.php');
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

<?php

$customerName=$_SESSION['nameofCustomer'];
$productName=$_POST['productDropdown'];
$titleName= filter_input(INPUT_POST, 'title_input');
$titleName = htmlspecialchars($titleName);
$description=$_POST['text_input'];





       $queryInsert="INSERT INTO incidentlist
                    (name,product,title,description)
                    VALUES
       (:name,:product,:title,:description) ";
       $updateStatement = $db->prepare($queryInsert);

       $updateStatement->bindValue(':name', $customerName);
       $updateStatement->bindValue(':product', $productName);
       $updateStatement->bindValue(':title', $titleName);
       $updateStatement->bindValue(':description', $description);
       $updateStatement->execute();


       if ($queryInsert) {
         echo "This incident was added to our database";
       }
       else {
         echo "Sorry there was an error adding this to our database";
       }




 ?>


<hr>
  </body>
</html>
