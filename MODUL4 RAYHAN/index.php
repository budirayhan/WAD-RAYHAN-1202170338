<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="index.css">
	<script src="https://kit.fontawesome.com/88374d7266.js" crossorigin="anonymous"></script>
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

<div class="container">
<div class="card-header"><h3>WAD Beauty</h3><p>Tersedian skin care dengan harga murah tapi bukan murahan dan berkualitas</p></div>
<div class="card-group">
  <div class="card">
	<form action="cart.php" method="POST">
    <img src="./icons/1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
      <p class="card-text">Produk terbaru dari somebymi yang memiliki manfaat untuk Whitening + blemish care + Anti-winkle...</p>
	  <hr>
	<b><p>Rp.180.000</p></b>
	</div>
    <div class="card-footer">
	<center><button type="submit" class="btn btn-primary" name="login">Tambahkan ke Keranjang</button></center>
    </div>
	</form>
</div>
  <div class="card">
	  <form action="cart.php" method="POST">
    <img src="./icons/2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
      <p class="card-text">Sebagai pelembap, krim ini mampu memberikan kelembapan yang menyeluruh dan tahan lama bagi kulit, sehingga terasa halus, lembap, dan kenyal.</p>
		<hr>
		<b><p>Rp.169.000</p></b>
	</div>
    <div class="card-footer">
	<center><button type="submit" class="btn btn-primary" name="login">Tambahkan ke Keranjang</button></center>
	</div>
	</form>
  </div>
  <div class="card">
	  <form action="cart.php" method="POST">
    <img src="./icons/3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">30 DAYS MIRACLE TONER</h5>
      <p class="card-text">Dengan kandungan AHA, BHA, dan PHA bekerja secara efektif untuk membuat kulit lebih bersih dan lebih bersinar....</p>
	<hr>
	<b><p>Rp.108.000</p></b>
	</div>
    <div class="card-footer">
	<center><button type="submit" class="btn btn-primary" name="login">Tambahkan ke Keranjang</button></center>
    </div>
  </form>
</div>
  
</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>