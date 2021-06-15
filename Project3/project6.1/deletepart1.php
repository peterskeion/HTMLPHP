<?php
$servername = "localhost";
$username = "someuser";
$password = "pa55word";
$dbname = "productmanager";
$code = $_POST[ 'delete_buttons' ];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM productlist WHERE Code='$code' ";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

header("location:manageProducts.php");
 exit;
$conn = null



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<a href="manageProducts.php">Go back to manage products</a>
<br>
<?php echo $code ?>
  </body>
</html>
