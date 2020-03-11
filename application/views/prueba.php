<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/prueba.js"></script>
  </head>
  <body>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="<?php echo base_url(); ?>/assets/img/logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Registrarse
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
  </body>
</html>
