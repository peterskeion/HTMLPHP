<?php


require_once('database.php');

$code = $_POST[ 'delete_buttons' ];


$queryDelete = "DELETE FROM productlist WHERE Code = '$code'" ;
$deleteStatement = $db->prepare($queryDelete);
$deleteStatement->execute();
if($queryDelete)
{
   header("location:manageProducts.php");
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
