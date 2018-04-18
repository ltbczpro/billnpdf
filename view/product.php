<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill'N'PDF - Home</title>
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
    <?php if (count($products)>0){?>
        <ul>
            <?php foreach ($products as $product) {?>
                <li>
                    <div class="border border-info rounded offset-sm-1 col-sm-10 offset-sm-1 bg-light p-5 mt-5">
                        <form method="POST" action="/billnpdf/controller/product.php" id="selectProduct_<?= $product['product_id']; ?>">
                            <section class="form-group">
                                <div class="form-row">
                                    <label for="select" class="offset-sm-9">Select this product:</label>
                                    <input type="checkbox" <?php if (isset($_SESSION['selectid']) &&  $_SESSION['selectid']==$product['product_id'])
                                    { echo "checked";}?> name="select" class="col-sm-1" onChange="document.getElementById('selectProduct_<?= $product['product_id']; ?>').submit()">
                                    <input type="hidden" name="id" value="<?= $product['product_id'];?>">
                                </div>
                            </section>
                        </form>
                        <form method="POST" action="/billnpdf/controller/product.php">
                            <section class="form-group"><div class="form-row">
                                    <label for="name" class="col-sm-12">Name of the product: <?= $product["name"] ?></label>
                                </div>
                                <div class="form-row">
                                    <input type="text" name="name" value="<?=$product["name"] ?>" class="col-sm-12">
                                </div>
                                <div class="form-row">
                                    <label for="designation" class="col-sm-12">Designation of the product: <?= $product["designation"] ?></label>
                                </div>
                                <div class="form-row">
                                    <input type="text" name="designation" value="<?=$product["designation"] ?>" class="col-sm-12">
                                </div>
                            </section>
                            <input type="hidden" name="productid" value="<?=$product["product_id"] ?>">
                            <input type="submit" name="edit" value="Edit your product" class="col-sm-12 btn btn-info" >
                        </form>

                        <form method="POST" action="/billnpdf/controller/product.php">
                            <input type="hidden" name="productid" value="<?=$product["product_id"] ?>">
                            <input type="submit" name="delete" value="Delete your product" class="col-sm-12 btn btn-warning mt-3">
                        </form>

                    </div>
                </li>
            <?php } ?>
        </ul>
    <?php }
    else{?>
        <p class="offset-sm-1 col-sm-10 offset-sm-1 text-sm-center">You have no product.</p>
    <?php } ?>
    <form method="POST" action="/billnpdf/controller/product.php" class="border border-info rounded offset-sm-1 col-sm-10 offset-sm-1 bg-light p-5 mt-5">
        <section class="form-group">
            <div class="form-row">
                <label for="name" class="col-sm-12">Name of the product:</label>
            </div>
            <div class="form-row">
                <input type="text" name="name" class="col-sm-12" >
            </div>
            <div class="form-row">
                <label for="designation" class="col-sm-12">Designation of the product:</label>
            </div>
            <div class="form-row">
                <input type="text" name="designation" class="col-sm-12" >
            </div>
        </section>
        <input type="submit" name="add" value="Add a new product" class="col-sm-12 btn btn-success">
    </form>
</article>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="../style/bootstrap.min.js"></script>
<script src="../style/bootstrap.bundle.js"></script>
<script src="../style/mdb.min.js"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
</body>
</html>