<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bill'N'PDF - Send By Email</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="../style/custom.css" rel="stylesheet" type="text/css">
    </head>
    <body class="container-fluid">
        <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
                <p class="navbar-brand text-primary">Bill'n'PDF</p>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="../controller/home.php" class="nav-link  text-light"> Home</a>
                    </li>
                    <li class="nav-item"><a href="../controller/bill.php" class="nav-link  text-light"> Create Bill</a>
                    </li>
                    <li class="nav-item"><a href="../controller/profil.php" class="nav-link  text-light"> My Profile</a>
                    </li>
                    <li class="nav-item"><a href="../controller/product.php" class="nav-link  text-light">My Products</a>
                    </li>
                    <li class="nav-item"><a href="../controller/book.php" class="nav-link  text-light"> My Address Book</a>
                    </li>
                    <li class="nav-item"><a href="../controller/invoid.php" class="nav-link  text-light">My Bills</a>
                    </li>
                    <li class="nav-item"><a href="../controller/contact.php" class="nav-link  text-light"> Contact Us</a>
                    </li>
                    <li class="nav-item"><a href="../controller/logout.php" class="nav-link  text-light"> Logout</a>
                    </li>ss
                </ul>
            </nav>
        </header>
        <article class="fix-large">
			<h2 class="offset-sm-1 col-sm-10 offset-sm-1 text-sm-center mt-5 mb-5">You can send your bill by email.</h2>
			<form method="POST" class="border border-info rounded offset-sm-1 col-sm-10 offset-sm-1 bg-light p-5 mt-5">
				<section class="form-group">
					<div class="form-row">
						<label for="email" class="col-sm-12">Your Email:</label>
					</div>
					<div class="form-row">
						<input type="text" name="email" placeholder="example@example.com" class="col-sm-12">
					</div>
          <div class="form-row">
						<label for="sendEmail" class="col-sm-12">Email to send:</label>
					</div>
					<div class="form-row">
						<input type="text" name="sendEmail" placeholder="example@example.com" class="col-sm-12">
					</div>
					<div class="form-row">
						<label for="object" class="col-sm-12">Object:</label>
					</div>
					<div class="form-row">
						<input type="text" name="object" class="col-sm-12">
					</div>
					<div class="form-row">
						<label for="message" class="col-sm-12">Message:</label>
					</div>
					<div class="form-row">
						<textarea name="message" class="col-sm-12"></textarea>
					</div>
				</section>
				<input type="submit" name="send" value="Send Message" class="col-sm-12 btn btn-outline-info">
			</form>
		</article>
	</body>
</html>
