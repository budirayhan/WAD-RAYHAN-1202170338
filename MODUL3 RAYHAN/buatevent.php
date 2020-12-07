<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Event</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="buatevent.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">EAD EVENTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="buatevent.php">Buat Event<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <h5 class="text-justify">Buat Event</h5>
    <div class="row">
        <div class="col-sm-6">
            <div class="card-header bg-primary">
                <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <h6>Name</h6>
                        <input type="text" name="name" class="form-control" id="tname">
                    </div>
                    <div class="form-group">
                        <h6>Deskripsi</h6>
                        <textarea name="deskripsi" class="form-control" id="tdeskripsi" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <h6>Upload Gambar</h6>
                        <div class="custom-file">
                            <input name="gambar" type="file" class="custom-file-input" id="upload">
                            <label class="custom-file-label" for="customFile">Browse</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <h6>Kategori</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="ronline" name="radio" class="custom-control-input">
                            <label class="custom-control-label" for="ronline">Online</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="roffline" name="radio" class="custom-control-input">
                            <label class="custom-control-label" for="roffline">Offline</label>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    <div class="col-sm-6">
        <div class="card-header bg-danger">
        </div>
            <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <h6>Tanggal</h6>
                    <input type="date" name="tanggal" class="form-control" id="ttanggal">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="mulai">Jam Mulai</label>
                        <input name="mulai" type="time" class="form-control" id="jammulai">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="berakhir">Jam Berakhir</label>
                        <input name="berakhir" type="time" class="form-control" id="jamakhir">
                    </div>
                </div>
                    <div class="form-group">
                        <h6>Tempat</h6>
                        <input type="text" name="tempat" class="form-control" id="ttempat">
                    </div>
                    <div class="form-group">
                        <h6>Harga</h6>
                        <input type="text" name="harga" class="form-control" id="tharga">
                    </div>
                <div class="form-group">
                    <h6>Benefit</h6>
                    <div class="form-check form-check-inline">
                        <input name="snack" class="form-check-input" type="checkbox" id="csnack" value="snack">
                        <label class="form-check-label" for="csnack">Snacks</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="sertifikat" class="form-check-input" type="checkbox" id="csertifikat" value="sertifikat">
                        <label class="form-check-label" for="csertifikat">Sertifikat</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="souvenir" class="form-check-input" type="checkbox" id="csouvenir" value="souvenir">
                        <label class="form-check-label" for="csnack">Souvenir</label>
                    </div>
                <div class="my-3">
                    <button name="submit" id="btsubmit" type="submit" class="btn btn-primary">Submit</button>
                    <button name="submit" id="btsubmit" type="submit" class="btn btn-danger">Cancel</button>
            </div>
                </div>
            </div>
    </div>
                </form>
    </div>
</div>  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>