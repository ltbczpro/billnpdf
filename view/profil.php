<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bill'N'PDF - My Profil</title>
	<link rel="stylesheet" href="../bootstrap.min.css">
	
</head>

<header>

		<nav class="navbar navbar-default">
		    <section class="navbar-header">
		      	<p class="navbar-text">Bill'n'PDF</p>
		    </section>
		    <ul class="nav navbar-nav">
		     	<li><a href="../controller/about.php"> Home</a></li>
		     	<li><a href="../controller/bill.php"> Create A Bill</a></li>
				<li><a href="../controller/profil.php"> My Profil</a></li>
				<li><a href="../controller/invoid.php">My Bills</a></li>
				<li><a href="../controller/book.php"> Address Book</a></li>
				<li><a href="../controller/contact.php"> Contact Us</a></li>
				<li><a href="../controller/logout.php"> Logout</a></li>
		    </ul>
		</nav>

</header>

<article>
	
	<form method="POST" action="/billnpdf/controller/profil.php">
		<section class="form-group">
			<label for="email">Email: <?php echo($profil["email"]) ?></label>
			<input type="text" name="email" value="<?php echo($profil["email"]) ?>">
		</section>
		<section class="form-group">
			<label for="name">Name: <?php echo($profil["name"]) ?></label>
			<input type="text" name="name" value=" <?php echo($profil["name"]) ?>">
		</section>
		<section class="form-group">
			<label for="adress">Address: <?php echo($profil["adress"]) ?></label>
			<input type="text" name="adress" value="<?php echo($profil["adress"]) ?>">
		</section>
		<section class="form-group">
			<label for="phone">Phone: <?php echo($profil["phone"]) ?></label>
			<input type="text" name="phone" value="<?php echo($profil["phone"]) ?>">
		</section>
		<section class="form-group">
			<label for="siren">SIREN: <?php echo($profil["siren"]) ?></label>
			<input type="text" name="siren" value="<?php echo($profil["siren"]) ?>">
		</section>
		<section class="form-group">
			<label for="logo">Logo:</label><img src="<?php echo($profil["logo"]) ?>">
			<input type="text" name="logo" value="<?php echo($profil["logo"]) ?>">
		</section>
		<input type="submit">
	</form>

</article>