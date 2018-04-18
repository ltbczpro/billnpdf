<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bill'N'PDF - My Bills</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="../style/custom.css" rel="stylesheet" type="text/css">
    </head>
    <body class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-dark">
            <p class="navbar-brand text-primary">Bill'n'PDF</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="../controller/home.php" class="nav-link text-light"> Home</a>
                    </li>
                    <li class="nav-item"><a href="../controller/bill.php" class="nav-link text-light"> Create Bill</a>
                    </li>
                    <li class="nav-item"><a href="../controller/profil.php" class="nav-link text-light"> My Profile</a>
                    </li>
                    <li class="nav-item"><a href="../controller/product.php" class="nav-link text-light">My Products</a>
                    </li>
                    <li class="nav-item"><a href="../controller/book.php" class="nav-link text-light"> My Address Book</a>
                    </li>
                    <li class="nav-item"><a href="../controller/invoid.php" class="nav-link text-light">My Bills</a>
                    </li>
                    <li class="nav-item"><a href="../controller/contact.php" class="nav-link text-light"> Contact Us</a>
                    </li>
                    <li class="nav-item"><a href="../controller/logout.php" class="nav-link text-light"> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
        <article class="fix-large">
            <h2 class="text-sm-center mb-2">My Bills</h2>
            <?php if (count($bills)>0){?>
                <table>
    	           <thead>
                        <tr>
                            <th>Name of the bill</th>
                            <th>Email</th>
                        </tr>
                   </thead>
                    <tbody>
                        <?php foreach ($bills as $bill) {?>
                            <tr>
    				            <td><a href="../upload/<?= $bill['name']; ?>"><?= $bill['name']; ?></a></td>
    				            <td><a href="../controller/mail.php" class="btn btn-primary">Send by Email</a></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            <?php }?>
        </article>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../style/bootstrap.min.js"></script>
    <script src="../style/bootstrap.bundle.js"></script>
    <script src="../style/mdb.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    </body>
</html>
