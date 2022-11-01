     <!DOCTYPE html>
     <html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- CSS only -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
          <!-- JavaScript Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <script>
               function setPicture() {
                    var banner = document.getElementById("tipe");
                    var value = banner.options[banner.selectedIndex].value;
                    $('img').attr("src", value);
               }
          </script>

     <!-- PHP CAR FIRST PICTURE -->

          <?php
          if (empty($_GET['cars'])) :
               $cars = "ToyotaCorolla";
               $imgUrl = "https://gamemodels.ru/screenshots/monthly_01_2020/ce4f05cf62b87625adad43f20722120a-thumbnail_455_big.png";
          else :
               $cars = $_GET['cars'];
          endif;

     // PHP CARS PICTURE

          if ($cars == "ToyotaCorolla") :
               $imgUrl = "https://gamemodels.ru/screenshots/monthly_01_2020/ce4f05cf62b87625adad43f20722120a-thumbnail_455_big.png";
          elseif ($cars == "NissanSkyline") :
               $imgUrl = "https://www.forzafire.com/images/base/cars/1993-nissan-skyline-gt-r-v-spec.png";
          elseif ($cars == "NissanPulsar") :
               $imgUrl = "https://www.forzafire.com/images/base/cars/1990-nissan-pulsar-gti-r.png";
          endif;
          ?>
          <title>EAD CAR BOOKING</title>
     </head>

     <body>

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

          <div class="mx-auto mt-3" style="text-align: center">
               <h3>Rent Your Car Now!</h3>
          </div>
          <section>
               <div class="container-fluid justify-content-center p-4">
                    <div class="row">
                         <div class="col-md-6">
                              <img src="<?= $imgUrl; ?>" onchange="setPicture()" alt="image-form" style="width:700px; margin-top:100px">
                         </div>

     <!-- BOOKING FORM -->

                         <div class="col-md-6">
                              <form action="Afif_MyBooking.php" method="POST">
                                   <div class="mb-2">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="Afif_1202202154" readonly>
                                   </div>
                                   <div class="mb-2">
                                        <label for="date1" class="form-label">Book Date</label>
                                        <input type="date" class="form-control" id="date1" name="date1">
                                   </div>
                                   <div class="mb-2">
                                        <label for="time1" class="form-label">Start Time</label>
                                        <input type="time" class="form-control" id="time1" name="time1">
                                   </div>
                                   <div class="mb-2">
                                        <label for="duration" class="form-label">Duration (Days)</label>
                                        <input type="number" class="form-control" id="duration" name="duration">
                                   </div>
                                   <div class="form-group">
                                        <label for="cars">Cars Type</label>
                                        <?php if (empty($_GET['cars'])) : ?>
                                             <select class="form-control" name="cars" id="tipe" onchange="setPicture()">
                                                  <option value="https://gamemodels.ru/screenshots/monthly_01_2020/ce4f05cf62b87625adad43f20722120a-thumbnail_455_big.png">
                                                       Toyota Corolla AE86 Sprinter Trueno</option>
                                                  <option value="https://www.forzafire.com/images/base/cars/1993-nissan-skyline-gt-r-v-spec.png">
                                                       Nissan Skyline GT-R V-SPEC</option>
                                                  <option value="https://www.forzafire.com/images/base/cars/1990-nissan-pulsar-gti-r.png">
                                                       Nissan Pulsar GTI-R</option>
                                             </select>
                                        <?php else : ?>
                                             <input type="text" class="form-control" value=<? $_GET['cars'] ?> name="cars" src readonly>
                                        <?php endif; ?>
                                   </div>
                                   <div class="mb-2">
                                        <label for="phonenum" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phonenum" name="phonenum">
                                   </div>
                                   <div class="mb-2">
                                        <label for="servis" class="form-label">Add Service(s)</label>
                                        <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="service1" value="Health protocol" id="health">
                                             <label class="form-check-label" for="health">
                                                  Health Protocol / Rp25.000
                                             </label>
                                        </div>
                                        <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="service2" value="Driver" id="driver">
                                             <label class="form-check-label" for="driver">
                                                  Driver / Rp100.000
                                             </label>
                                        </div>
                                        <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="service3" value="Fuel filled" id="fuel">
                                             <label class="form-check-label" for="fuel">
                                                  Fuel Filled / Rp250.000
                                             </label>
                                        </div>
                                   </div>
                                   <div class="d-grid">
                                        <button class="btn btn-block btn-success" type="submit" value="send">Book</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </section>

     <!-- FOOTER -->

          <footer class="bg-light mt-4">
               <div class="text-center p-3" style="color: gray;">
                    <h6 class="mt-2">Created by Afif_1202202154</h6>
               </div>
          </footer>
     </body>
     </html>