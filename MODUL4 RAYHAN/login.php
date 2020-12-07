<?php
session_start();

include_once("konek.php");

if (!empty($_COOKIE['navbar'])) {
    $navbar = $_COOKIE['navbar'];
} else {
    $navbar = 'light';
}

if (isset($_POST['login'])) {
    login($_POST);
}

if (!empty($_COOKIE['rememberMe'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    $rememberMe = $_COOKIE['rememberMe'];
} else {
    $email = null;
    $password = null;
    $rememberMe = null;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>

        body {
            background: #E0FFFF;
        }
    </style>

    <title>Login</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg justify-content-between bg-<?= $navbar; ?> navbar-<?= $navbar; ?>">
  <a class="navbar-brand" href="#">WAD Beauty</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDeE0FFFF">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="register.php">Registrasi <span class="sr-only">(current)</span></a>
      </li>
   
  </div>
</nav>
<br>
<?php if (isset($_SESSION['message'])) : ?>
        <div class='alert alert-warning alert-dismissible fade show fade in' role='alert'>
            <?= $_SESSION['message']; ?>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>
<div class="container" style="margin-top: 150px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="container">
                        <h4 class="card-title text-center mt-4 pb-2">Login</h4>
                        <hr>
              <div class="card-body pt-0">
                            <form action="index.php" method="POST">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="<?= $email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" value="<?= $password; ?>">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe" <?= $rememberMe; ?>>
                                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                                </div>
                                <div class="text-center pt-2">
                                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                                    <p class="mt-3">Belum punya akun? <a href="register.php" class="text-secondary">Registrasi</a></p>
                                </div>
                            </form>
                        </div>
                     </div>
                  </div>
              </div>
          </div>
        </div>









 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>