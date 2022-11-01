    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>EAD Book Reserve</title>
    </head>

    <!-- DECLARE VARIABLE -->

    <body>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $idNumber = rand(800000, 900000);
        $nama = $_POST['name'];
        $sttime = $_POST['time1'];
        $date1 = $_POST['date1'];
        $duration = $_POST['duration'];
        $checkOut = $date1 . " + " . $duration . "days";
        $cars = $_POST['cars'];
        $phone = $_POST['phonenum'];

    // PHP CARS PICTURE

        if ($cars == "https://gamemodels.ru/screenshots/monthly_01_2020/ce4f05cf62b87625adad43f20722120a-thumbnail_455_big.png") :
            $cars = 'ToyotaCorolla';
        elseif ($cars == "https://www.forzafire.com/images/base/cars/1993-nissan-skyline-gt-r-v-spec.png") :
            $cars = 'NissanSkyline';
        elseif ($cars == "https://www.forzafire.com/images/base/cars/1990-nissan-pulsar-gti-r.png") :
            $cars = 'NissanPulsar';
        endif;

    // PHP CARS COST W/ DURATION

        if ($cars == "ToyotaCorolla") :
            $total = 300000 * $duration;
        elseif ($cars == "NissanSkyline") :
            $total = 400000 * $duration;
        elseif ($cars == "NissanPulsar") :
            $total = 400000 * $duration;
        endif;

    // PHP CARS SERVICE COST WITHOUT SERVICES

        if (empty($_POST['service1']) and empty($_POST['service2']) and empty($_POST['service3'])) :
            $serv1 = "-";
            $serv2 = "-";
            $serv3 = "-";
            $servShow = "no service";
        endif;

    // PHP CARS SERVICE COST INCLUDE ALL SERVICES

        if (!empty($_POST['service1']) and !empty($_POST['service2']) and !empty($_POST['service3'])) :
            $servShow = "<li>Health Protocol</li> <li>Driver</li> <li>Fuel Filled</li>";
            $total += 375000;
        endif;

    // PHP CARS SERVICE COST : HEALTH PROTOCOL AND DRIVER 

        if (!empty($_POST['service1']) and !empty($_POST['service2']) and empty($_POST['service3'])) :
            $serv3 = "-";
            $servShow = "<li>Health Protocol</li> <li>Driver</li>";
            $total += 125000;
        endif;

    // PHP CARS SERVICE COST : HEALTH PROTOCOL AND FUEL FILLED

        if (!empty($_POST['service1']) and empty($_POST['service2']) and !empty($_POST['service3'])) :
            $serv2 = "-";
            $servShow = "<li>Health Protocol</li> <li>Fuel Filled</li>";
            $total += 275000;
        endif;

    // PHP CARS SERVICE COST : DRIVER AND FUEL FILLED

        if (empty($_POST['service1']) and !empty($_POST['service2']) and !empty($_POST['service3'])) :
            $serv1 = "-";
            $servShow = "<li>Driver</li> <li>Fuel Filled</li>";
            $total += 350000;
        endif;

    // PHP CARS SERVICE COST : HEALTH PROTOCOL ONLY

        if (!empty($_POST['service1']) and empty($_POST['service2']) and empty($_POST['service3'])) :
            $serv2 = "-";
            $serv3 = "-";
            $servShow = "<li>Health Protocol</li>";
            $total += 25000;
        endif;

    // PHP CARS SERVICE COST : DRIVER ONLY

        if (empty($_POST['service1']) and !empty($_POST['service2']) and empty($_POST['service3'])) :
            $serv1 = "-";
            $serv3 = "-";
            $servShow = "<li>Driver</li>";
            $total += 100000;
        endif;

    // PHP CARS SERVICE COST : FUEL FILLED ONLY

        if (empty($_POST['service1']) and empty($_POST['service2']) and !empty($_POST['service3'])) :
            $serv1 = "-";
            $serv2 = "-";
            $servShow = "<li>Fuel Filled</li>";
            $total += 250000;
        endif;
        ?>

    <!-- NAVIGATION BAR -->

        <nav class="navbar bg-dark navbar-expand-lg navbar-black">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-bar" aria-controls="nav-bar" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="nav-bar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="color: gray;" href="Afif_Home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: gray;" href="Afif_Booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- HEADER TITLE -->

        <div class="mt-3 mb-2" style="text-align: center">
            <h3><strong><?= 'Thank You', ' ', $name, ' ', 'For Reserving' ?></strong></h3>
            <p>Please Double Check Your Reservation Details</p>
        </div>

    <!-- TABLE HEAD CONTENT -->

        <br><br>
        <div class="container d-flex justify-content-center">
            <table class="table table-striped">
                <tr>
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Cars Type</th>
                    <th>Phone Number</th>
                    <th>Service</th>
                    <th>Total Price</th>
                </tr>

    <!-- TABLE DATA CONTENT -->

                <tr>
                    <td class="font-weight-bold"><?= $idNumber ?></td>
                    <td><?= $name ?></td>
                    <td><?= date('d/m/Y', strtotime($date1)), ' ', $sttime ?></td>
                    <td><?= date('d/m/Y', strtotime($checkOut)), ' ', $sttime ?></td>
                    <td><?= $cars; ?></td>
                    <td><?= $phone ?></td>
                    <td><?= $servShow ?></td>
                    <td>Rp<?= $total ?></td>
                </tr>
            </table>
        </div>

    <!-- FOOTER -->

        <footer class="bg-light" style="position:absolute; bottom:0; width:100%;">
            <div class="text-center p-3" style="color: gray;">
                <h6 class="mt-2">Created by Afif_1202202154</h6>
            </div>
        </footer>
    </body>

    </html>