<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bill'n'PDF</title>
</head>
<body>

	<article>

		<h2> Log you for to access at the site Bill'n'PDF or<a href="controller/login.php"> to subscribe</a>.</h2>

		<form method="POST" action="/billstation/natif/controller/login.php">
			<section class="form-group">
				<label for="login">Email:</label>
				<input type="email" class="form-control" name="login">
			</section>
			<section class="form-group">
				<label for ="password">Password:</label>
				<input type="password" class="form-control" name="pwd">
			</section>
			<button type="submit">Connexion</button>
		</form>

	</article>
	
</body>
</html>