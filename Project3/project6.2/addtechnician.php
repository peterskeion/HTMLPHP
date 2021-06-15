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




    <hr  noshade>

    <h1>Add Prouduct</h1>
    <form method="post" action="addTechniciansuccessscreen.php">
			<label for="firstName_entry">First Name:</label>
			<input type="text" id="firstName_entry" name="firstName_entry">
			<br>
			<label for="lastName_entry">Last Name:</label>
			<input type="text" id="lastName_entry" name="lastName_entry">
			<br>
			<label for="email_entry">Email:</label>
			<input type="text" id="email_entry" name="email_entry">
			<br>
      <label for="phone_entry">Phone:</label>
			<input type="text" id="phone_entry" name="phone_entry" placeholder="000-000-0000 format">
      <br>
      <label for="password_entry">Password:</label>
			<input type="text" id="password_entry" name="password_entry">
			<br>
			<input type="submit" value="Add Technician">
		</form>
		<br/>


		<a href="managetechnicians.php">View Technician List</a>

<hr  noshade>


</body>
</html>
