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
		     	<li><a href="../controller/home.php"> Home</a></li>
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
	

	<?php if (count($clients)>0){?>
		<ul>
		<?php foreach ($clients as $client) {?>
			<li>
				<form method="POST" action="/billnpdf/controller/book.php">
		<section class="form-group">
			<label for="name">Name of the contact: <?php echo($client["name"]) ?></label>
			<input type="text" name="name" value="<?php echo($client["name"]) ?>">
		</section>
		<section class="form-group">
			<label for="adress">Address of the contact: <?php echo($client["adress"]) ?></label>
			<input type="text" name="adress" value=" <?php echo($client["adress"]) ?>">
		</section>
		<input type="hidden" name="id" value="<?php echo($client["clientid"]) ?>">
		<input type="submit" name="edit" value="EDIT">
				</form>
			</li>
		<?php } ?>
		</ul>
	<?php } 
	else{?>
		<p>You have no contact in your address book.</p>
	<?php } ?>
	

	<form method="POST" action="/billnpdf/controller/book.php">
		<section class="form-group">
			<label for="name">Name of the contact:</label>
			<input type="text" name="name">
		</section>
		<section class="form-group">
			<label for="adress">Address of the contact:</label>
			<input type="text" name="adress">
		</section>
		<input type="submit" name="add" value="ADD">
	</form>
</article>