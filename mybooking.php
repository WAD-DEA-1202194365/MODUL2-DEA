<!DOCTYPE html>
<html lang="en" dir="ltr">
 
<head>
    <meta charset="utf-8">
    <title>My Booking</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Hanalei+Fill" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Hanalei+Fill|Noto+Serif+JP|Raleway" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        $user = "Dea_1202194365";
        $masuk = $_POST['edate'] . " " . $_POST['stime'];
        $checkin = date('d-m-y H:i', strtotime($masuk));
        $checkout = date('d-m-y H:i', strtotime($masuk)+60*60* $_POST['duration']);

        $HargaGedung = 0;
        $HargaService = 0;
        $HargaTotal = 0;
        $NusantaraHall =  2000;
        $GarudaHall = 1000;
        $GSG = 500;

        if ($_POST["btypes"] == "Nusantara Hall"){
            $HargaGedung = $NusantaraHall * $_POST["duration"];
        } else if ($_POST["btypes"] == "Garuda Hall"){
            $HargaGedung = $GarudaHall * $_POST["duration"];
        } else if ($_POST["btypes"] == "Gedung Serbaguna"){
            $HargaGedung = $GSG * $_POST["duration"];
        };

        for($j = 0; $j<count($_POST["layanan"]); $j++){
            if( $_POST["layanan"][$j] == "Catering"){
                $HargaService = $HargaService + 700;
            } else if ($_POST["layanan"][$j] == "Decoration"){
                $HargaService = $HargaService + 450;
            } else if ($_POST["layanan"][$j] == "Sound System"){
                $HargaService = $HargaService + 250;
            }
        };

        $HargaTotal = $HargaService + $HargaGedung;

        
    ?>

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
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center mt-2">Thank you Neta_1202190010 for Reserving</h4>
                    <h5 class="text-center">Please double check your reservation details</h5>

                    <table class="table table-striped" id="table_booking">
                    <thead>
                        <tr>
                            <th scope="col">Booking Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Check-in</th>
                            <th scope="col">Check-out</th>
                            <th scope="col">Building Type</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Service</th>
                            <th scope="col">Total Prices</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo rand() ?></td>
                            <td><?= $_POST["name"]?></td>
                            <td><?= $checkin?></td>
                            <td><?= $checkout?></td>
                            <td><?= $_POST["btypes"]?></td>
                            <td><?= $_POST["phone"]?></td>
                            <td><?php
                                    if(isset($_POST['submit'])){

                                    if(!empty($_POST['layanan'])) {    
                                    foreach($_POST['layanan'] as $bonus){
                                    echo $bonus. "<br>";
                                    }
                                }
                            }?></td>
                            <td><?= $HargaTotal?></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center p-4 mt-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © Dea_1202194365
    </div>

    <!-- <script>
        $(document).ready(function(){
            if(localStorage.getItem("booking-data") !== null){
                const data = JSON.parse(localStorage.getItem('booking-data'));

                if(data.length > 0){
                    let html = '';

                    for(let i = 0; i < data.length; i++){
                        html += `<tr>`+
                                `<td></td>`;
                    }
                }
            }
        });
    </script> -->
 
</body>
 
</html>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>