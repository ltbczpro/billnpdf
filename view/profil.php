<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bill'N'PDF - My Profile</title>
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
                    </li>
            	</ul>
        	</nav>
		</header>
		<article class="fix-large">
			<h2 class="text-sm-center mb-2">My Profile</h2>
			<form method="POST" action="/billnpdf/controller/profil.php" class="border border-info rounded offset-sm-1 col-sm-10 offset-sm-1 bg-light p-5 mt-5">
				<section class="form-group ">
					<div class="form-row">
						<label for="email" class="col-sm-12">Email: <?php echo($profil["email"]) ?></label>
					</div>
					<div class="form-row">
						<input type="text" name="email" value="<?php echo($profil["email"]) ?>" class="col-sm-12">
						<small class="form-text col-sm-12 text-muted">Warning! if you change your email, you change your login!</small>
					</div>
					<div class="form-row">
						<label for="name" class="col-sm-12">Name: <?php echo($profil["name"]) ?></label>
					</div>
					<div class="form-row">
						<input type="text" name="name" value=" <?php echo($profil["name"]) ?>" class="col-sm-12" >
					</div>
					<div class="form-row">
						<label for="adress" class="col-sm-12">Address: <?php echo($profil["adress"]) ?></label>
					</div>
					<div class="form-row">
						<input type="text" name="adress" value="<?php echo($profil["adress"]) ?>" class="col-sm-12">
					</div>
					<div class="form-row">
						<label for="phone" class="col-sm-12">Phone: <?php echo($profil["phone"]) ?></label>
					</div>
					<div class="form-row">
						<input type="text" name="phone" value="<?php echo($profil["phone"]) ?>" class="col-sm-12">
					</div>
					<div class="form-row">
						<label for="siren" class="col-sm-12">SIREN: <?php echo($profil["siren"]) ?></label>
					</div>
					<div class="form-row">
						<input type="text" name="siren" value="<?php echo($profil["siren"]) ?>" class="col-sm-12">
					</div>
				</section>
				<input type="submit" name="" value="Edit Profile" class="col-sm-12 btn btn-info">
			</form>
		</article>
	</body>
</html>