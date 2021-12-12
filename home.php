<!DOCTYPE html>
<html lang="en" dir="ltr">
 
<head>
    <meta charset="utf-8">
    <title>TP 2 WAD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Hanalei+Fill" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Hanalei+Fill|Noto+Serif+JP|Raleway" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
 
<body id="home">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
 
                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 
    <section style="min-height: 80vh;">
        <div class="container">
            <h4 class="text-center">WELCOME TO ESD VENUE RESERVATION</h4>
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="mb-0 p-2 bg-dark text-light text-center">Find your best deal for your event, here!</h5>
 
                    <div class="row mt-4">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="nusantara-hall.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Nusantara Hall</h5>
                                    <p class="card-text text-muted">$2000 / Hour<br>5000 capacity</p>
                                </div>
 
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center text-success"><b>Free Parking</b></li>
                                    <li class="list-group-item text-center text-success"><b>Full AC</b></li>
                                    <li class="list-group-item text-center text-success"><b>Cleaning Service</b></li>
                                    <li class="list-group-item text-center text-success"><b>Covid-19 Health Protocol</b></li>
                                    <div class="card-footer text-center" id="book1">
                                        <small class="text-muted"><input type="button" class="btn btn-primary btn-edit" onclick="window.location='booking.php?nama=Nusantara Hall'" value="Book Now" ngd="Nusantara Hall"></input></small>
                                    </div>
                                </ul>
                            </div>
                        </div>
 
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="garuda-hall.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Garuda Hall</h5>
                                    <p class="card-text text-muted">$1000 / Hour<br>2000 capacity</p>
                                </div>
 
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center text-success"><b>Free Parking</b></li>
                                    <li class="list-group-item text-center text-success"><b>Full AC</b></li>
                                    <li class="list-group-item text-center text-danger"><b>No Cleaning Service</b></li>
                                    <li class="list-group-item text-center text-success"><b>Covid-19 Health Protocol</b></li>
                                    <div class="card-footer text-center" id="book2">
                                        <small class="text-muted"><input type="button" class="btn btn-primary btn-edit" onclick="window.location='booking.php?nama=Garuda Hall'" value="Book Now" ngd="Garuda Hall"></input></small>
                                    </div>
                                </ul>
                            </div>
                        </div>
 
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="gsg.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Gedung Serba Guna</h5>
                                    <p class="card-text text-muted">$500 / Hour<br>500 capacity</p>
                                </div>
 
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center text-danger"><b>No Free Parking</b></li>
                                    <li class="list-group-item text-center text-danger"><b>No Full AC</b></li>
                                    <li class="list-group-item text-center text-danger"><b>No Cleaning Service</b></li>
                                    <li class="list-group-item text-center text-success"><b>Covid-19 Health Protocol</b></li>
                                    <div class="card-footer text-center" id="book3">
                                        <small class="text-muted"><input type="button" class="btn btn-primary btn-edit" onclick="window.location='booking.php?nama=Gedung Serba Guna'" value="Book Now" ngd="GSG"></input></small>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <div class="text-center p-4 mt-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © Created by: DEA_1202194365
    </div>
 
</body>
 
</html>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>