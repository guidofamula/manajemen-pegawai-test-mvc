<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Login Aplikasi</title>
   
    <link href="<?= BASE_PATH ?>/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body class="h-100 bg-info d-flex align-items-center">
     <div class="container">
       <div class="row">
         <div class="col-sm-6 col-md-4 mx-auto bg-light p-4">
            <h3 class="text-center text-info pb-3 mb-3 border-bottom">Login Aplikasi</h3>

								<?php
								if(isset($msg)){
								   echo "<div class='alert alert-danger'>$msg</div>";
								}
								?>

            <form method="post" action="<?= BASE_PATH ?>/login/check">
               <input class="form-control form-control-lg mb-3" type="text" placeholder="Username" name="username">
               <input class="form-control form-control-lg mb-3" type="password" placeholder="Password" name="password">
               <input class="btn btn-info btn-lg btn-block" type="submit" value="Login">
            </form>
         </div>
       </div>
     </div>
   </body>
</html>