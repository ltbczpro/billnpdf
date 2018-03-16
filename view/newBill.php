<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bill'N'PDF - New Bill</title>
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
                    <li class="nav-item"><a href="../controller/invoid.php" class="nav-link  text-light">My Bills</a>
                    </li>
                    <li class="nav-item"><a href="../controller/book.php" class="nav-link  text-light"> Address Book</a>
                    </li>
                    <li class="nav-item"><a href="../controller/contact.php" class="nav-link  text-light"> Contact Us</a>
                    </li>
                    <li class="nav-item"><a href="../controller/logout.php" class="nav-link  text-light"> Logout</a>
                    </li>
                </ul>
            </nav>
        </header>
        <article class="fix-large">
            <form method="POST" action="/billnpdf/controller/newBill.php" class="border border-info rounded offset-sm-1 col-sm-10 offset-sm-1 bg-light p-5 mt-5">
                <section class="form-group form-row">
                    <div class="col-sm-6">
                        <label for="number" class="col-sm-6">Number of the invoid:</label>
                        <input type="number" name="number" class="col-sm-5">
                    </div>
                    <div class="col-sm-6">
                        <label for="type" class="col-sm-5">Mode of payment:</label>
                        <input type="radio" name="type" value="spot" checked class="col-sm-1"> Spot
                        <input type="radio" name="type" value="delayed" class="col-sm-1"> Delayed
                    </div>
                </section>
                <section class="form-group form-row">
                    <label for="name" class="col-sm-3">Name of your society:</label>
                    <input type="text" name="name" class="col-sm-9">
                </section>
                <section class="form-group form-row">
                    <label for="adress" class="col-sm-3">Address of your society:</label>
                    <input type="text" name="adress" class="col-sm-9">
                </section>
                <section class="form-group form-row">
                    <label for="email" class="col-sm-3">Your email:</label>
                    <input type="text" name="email" class="col-sm-9">
                </section>
                <section class="form-group form-row">
                    <div class="col-sm-6">
                        <label for="phone" class="col-sm-6">Your phone:</label>
                        <input type="text" name="phone" class="col-sm-5">
                    </div>
                    <div class="col-sm-6">
                        <label for="siren" class="col-sm-6">SIREN of your society:</label>
                        <input type="text" name="siren" class="col-sm-5">
                    </div>
                </section>
                <section class="form-group form-row">
                    <label for="clientName" class="col-sm-3">Name of your customer:</label>
                    <input type="text" name="clientName" class="col-sm-9">
                </section>
                <section class="form-group form-row">
                    <label for="clientAdress" class="col-sm-3">Address of your customer:</label>
                    <input type="text" name="clientAdress" class="col-sm-9">
                </section>
                <section class="form-group form-row">
                    <label for="reference" class="col-sm-3">Reference:</label>
                    <input type="text" name="reference" class="col-sm-9">
                </section>
                <section class="form-group form-row">
                    <label for="designation" class="col-sm-3">Product designation:</label>
                    <textarea name="designation" class="col-sm-9"></textarea>
                </section>
                <section class="form-group form-row">
                    <div class="col-sm-4">
                        <label for="tva" class="col-sm-7">TVA:</label>
                        <input type="text" name="tva" class="col-sm-3">
                    </div>
                    <div class="col-sm-4">
                        <label for="quantity" class="col-sm-7">Quantities:</label>
                        <input type="number" name="quantity" class="col-sm-3">
                    </div>
                    <div class="col-sm-4">
                        <label for="upet" class="col-sm-7">Unit price ex. tax:</label>
                        <input type="text" name="upet" class="col-sm-3">
                    </div>
                </section>
                <section class="form-group form-row">
                    <label for="infos" class="col-sm-3">Further information:</label>
                    <textarea name="upet" class="col-sm-9"></textarea>
                </section>
                    <input type="submit" name="add" value="Create a new bill" class="col-sm-12 btn btn-info">
            </form>
        </article>
    </body>
</html>