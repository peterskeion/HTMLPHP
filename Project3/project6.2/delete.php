<?php


require_once('database.php');

$email = $_POST[ 'delete_buttons' ];


$queryDelete = "DELETE FROM technicianlist WHERE email = '$email'" ;
$deleteStatement = $db->prepare($queryDelete);
$deleteStatement->execute();
if($queryDelete)
{
   header("location:managetechnicians.php");
   exit;
}
else
{
  echo "Error deleting record";
}
?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<a href="manageProducts.php">Go back to manage products</a>
<?php echo $code ?>
  </body>
</html>
