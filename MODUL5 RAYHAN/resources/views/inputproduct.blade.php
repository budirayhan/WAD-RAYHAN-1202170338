<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light" data-toggle="affix">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <div class="collapse navbar-collapse text-center" id="navbarsExample11">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="insertproduct">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="order">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history">History</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<center><h3>Input Product</h3></center>
<br>
<form>
  <div class="form-group">
    <label for="InputProduct">Product Name</label>
    <input type="text" class="form-control" id="InputProduct" aria-describedby="">
  </div>
  <div class="form-group">
    <label for="InputPrice">Price</label>
    <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text">$ USD</div>
    </div>
    <input type="text" class="form-control py-0" id="InputPrice">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="InputStock">Stock</label>
    <input type="text" class="form-control" id="InputStock" aria-describedby="">
  </div>
  <div class="form-group">
    <label for="InputImage">image file input</label>
    <input type="file" class="form-control-file" id="ImageInput">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>