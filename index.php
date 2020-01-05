<!DOCTYPE html>
<html>
<head>
	<title>Atom Payment Gateway Integration</title>
</head>
<body>

	<div>
		<form method="post" action="request.php">
			<label>Name :</label>
			<input type="text" name="name_field"><br><br>

			<label>Email :</label>
			<input type="email" name="email"><br><br>

			<label>Mobile :</label>
			<input type="number" name="mobile"><br><br>

			<label>Address :</label>
			<textarea name="address"></textarea><br><br>

			<label>Amount :</label>
			<input type="number" name="amount"><br><br>

			<button type="submit" style="background: green;color: white;" name="save">Pay Button</button>
		</form>
	</div>
</body>
</html>