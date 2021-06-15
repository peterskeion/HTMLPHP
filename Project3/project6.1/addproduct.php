


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


    <h1>Add Prouduct</h1>
    <form method="post" action="addproductSuccessScreen.php">
			<label for="code_entry">Code:</label>
			<input type="text" id="code_entry" name="code_entry">
			<br>
			<label for="name_entry">Name:</label>
			<input type="text" id="name_entry" name="name_entry">
			<br>
			<label for="version_entry">Version:</label>
			<input type="text" id="version_entry" name="version_entry">
			<br>
      <label for="releaseDate_entry">Release Date:</label>
			<input type="text" id="releaseDate_entry" name="releaseDate_entry" placeholder="0000-00-00 Format">
      <br>
			<input type="submit" value="Add Product">
		</form>
		<br/>


		<a href="manageProducts.php">View Product List</a>



</body>
</html>
