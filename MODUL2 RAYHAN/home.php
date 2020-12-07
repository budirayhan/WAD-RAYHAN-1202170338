<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Booking</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/88374d7266.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand mx-auto"  href="#">Home Booking</a>
    </nav>
    
    <br>
    
    <center><h2 style="color:chartreuse"><b>EAD HOTEL</b></h2></center>
    <center><h5 style="color: palevioletred;">Welcome To Star Hotel</h5></center>

    <br>

    <div class="container">
    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-md-0">
            <form action="home.php" method="post" >
                <div class="card shadow">
                    <div>
                    <img src="room-1.jpg" class="img-fluid card-img-top" alt="image1">
                    </div>
                    <div class="card-body">
                        <center><h5 class="card-title" style="font-weight: bold;">Standard</h5></center>
                        <center><h6>$ 90/day</h6></center>
                    </div>
                        <ul class="list-group list-group-flush">
                            <center><li class="list-group-item" style="font-weight: bold;">Facilities</li></center>
                            <center><li class="list-group-item">1 Single Bed</li></center>
                            <center><li class="list-group-item">1 Bathroom</li></center>
                        </ul>
                    <div class="card-body">
                        <center><button class="btn btn-primary" type="submit" name="book" >Book Now</button></center>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 my-md-0">
            <form action="home.php" method="post" >
                <div class="card shadow">
                    <div>
                    <img src="room-2.jpg" class="img-fluid card-img-top" alt="image1">
                    </div>
                    <div class="card-body">
                        <center><h5 class="card-title" style="font-weight: bold;">Superior</h5></center>
                        <center><h6>$ 150/day</h6></center>
                    </div>
                        <ul class="list-group list-group-flush">
                            <center><li class="list-group-item" style="font-weight: bold;">Facilities</li></center>
                            <center><li class="list-group-item">1 Double Bed</li></center>
                            <center><li class="list-group-item">1 TV and WiFi</li></center>
                            <center><li class="list-group-item">1 Bathroom with hot water</li></center>
                        </ul>
                    <div class="card-body">
                        <center><button class="btn btn-primary" type="submit" name="book" >Book Now</button></center>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 my-md-0">
            <form action="home.php" method="post" >
                <div class="card shadow">
                    <div>
                    <img src="room-3.jpg" class="img-fluid card-img-top" alt="image1">
                    </div>
                    <div class="card-body">
                        <center><h5 class="card-title" style="font-weight: bold;">Standard</h5></center>
                        <center><h6>$ 200/day</h6></center>
                    </div>
                        <ul class="list-group list-group-flush">
                            <center><li class="list-group-item" style="font-weight: bold;">Facilities</li></center>
                            <center><li class="list-group-item">2 Double Bed</li></center>
                            <center><li class="list-group-item">2 Bathroom with hot water</li></center>
                            <center><li class="list-group-item">1 Kitchen</li></center>
                            <center><li class="list-group-item">1 TV and WiFi</li></center>
                            <center><li class="list-group-item">1 Workroom</li></center>
                        </ul>
                    <div class="card-body">
                        <center><button class="btn btn-primary" type="submit" name="book" >Book Now</button></center>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>