<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill'n'PDF - Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="style/custom.css" rel="stylesheet" type="text/css"> 
  </head>

  <body class="container-fluid">
    <article class="fix-small">
		  <h2 class="text-sm-center mt-5 mb-5">Log you to access to the site Bill'n'PDF or<a href="controller/login.php"> subscribe you</a>.</h2>
      <form method="POST" class="border border-dark rounded offset-sm-4 col-sm-4 offset-sm-4 bg-light" action="/billnpdf/controller/login.php">
        <div class="form-group">
          <div class="offset-sm-4 col-sm-2 pt-3">
    		  	<label for="login" class="col-form-label col-form-label-lg">Email</label>
          </div>
    			<div class="offset-sm-1 col-sm-10">
      				<input type="email" class="form-control form-control-lg is-valid" name="login" required>
    			</div>
  			</div>
  			<div class="form-group">
          <div class="offset-sm-4 col-sm-2 pb-3">
            <label for="pwd" class="col-form-label col-form-label-lg ">Password</label>
          </div>
    			<div class="offset-sm-1 col-sm-10">
      			<input type="password" class="form-control form-control-lg is-valid" name="pwd" required>
    			</div>
 			  </div>
 			  <div class="form-group">
    			<div class="offset-sm-4 col-sm-1 pt-3">
      			<button type="submit" class="btn btn-lg btn-outline-dark ">Login</button>
    			</div>
  			</div>
  		</form>
    </article>
  </body>
</html>