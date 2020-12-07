<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['Add_To_Cart'])){
        if(isset($_SESSION['cart'])){
            
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
	<a class="navbar-brand" href="#">WAD Beauty</a>
  	<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
			<a class="nav-link" href="cart.php"><span class="fas fa-shopping-cart"></span></a><p>Selamat Datang</p>
		</li>
    	<li class="nav-item dropdown">
    		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    	<div class="dropdown-menu">
			<a class="dropdown-item" href="#">Profile</a>
      	<div class="dropdown-divider"></div>
      		<a class="dropdown-item" href="#">Logout</a>
    	</div>
  		</li>
  	</ul>
</nav>
<br>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>