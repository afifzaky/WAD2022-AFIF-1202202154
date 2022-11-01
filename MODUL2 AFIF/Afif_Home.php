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
          <title>EAD RENT</title>
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

     <!-- HEADER -->

          <div class="mt-3" style="text-align: center">
               <h3><strong>WELCOME TO EAD RENT</strong></h3>
               <br>
               <p>Find Your Best Deal, Here!</p>
               <br>
          </div>

     <!-- CARDS CAR / CATALOG CAR -->

          <section class="container" id="cars">
               <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                         <div class="card">
                              <img src="https://gamemodels.ru/screenshots/monthly_01_2020/ce4f05cf62b87625adad43f20722120a-thumbnail_455_big.png" style="max-height: 240px" class="card-img-top">

     <!-- TOYOTA COROLLA -->

                              <div class="card-body">
                                   <h5 class="card-title">Toyota Corolla AE86 Sprinter Trueno</h5>
                                   <p class="card-text text-muted">Rp. 300000 / Day</p>
                              </div>
                              <ul class="list-group text-center fw-bold">
                                   <li class="list-group-item text-primary">5 Kursi</li>
                                   <li class="list-group-item text-primary">1.600 CC</li>
                                   <li class="list-group-item text-primary">Manual</li>
                              </ul>
                              <div class="card-footer d-flex justify-content-center">
                                   <a class="btn btn-danger" type="submit" href="Afif_Booking.php?cars=ToyotaCorola">Book Now</a>
                              </div>
                         </div>
                    </div>

     <!-- NISSAN SKYLINE -->

                    <div class="col">
                         <div class="card">
                              <img src="https://www.forzafire.com/images/base/cars/1993-nissan-skyline-gt-r-v-spec.png" style="max-height: 240px" class="card-img-top">
                              <div class="card-body">
                                   <h5 class="card-title">Nissan Skyline GT-R V-SPEC</h5>
                                   <p class="card-text text-muted">Rp. 400000 / Day</p>
                              </div>
                              <ul class="list-group text-center fw-bold">
                                   <li class="list-group-item text-primary">4 Kursi</li>
                                   <li class="list-group-item text-primary">1.800 CC</li>
                                   <li class="list-group-item text-primary">Manual</li>
                              </ul>
                              <div class="card-footer d-flex justify-content-center">
                                   <a class="btn btn-danger" type="submit" href="Afif_Booking.php?cars=NissanSkyline">Book Now</a>
                              </div>
                         </div>
                    </div>

     <!-- NISSAN PULSAR -->

                    <div class="col">
                         <div class="card">
                              <img src="https://www.forzafire.com/images/base/cars/1990-nissan-pulsar-gti-r.png" style="max-height: 240px" class="card-img-top">
                              <div class="card-body">
                                   <h5 class="card-title">Nissan Pulsar GTI-R</h5>
                                   <p class="card-text text-muted">Rp. 400000 / Day</p>
                              </div>
                              <ul class="list-group text-center fw-bold">
                                   <li class="list-group-item text-primary">5 Kursi</li>
                                   <li class="list-group-item text-primary">1.500 CC</li>
                                   <li class="list-group-item text-primary">Manual</li>
                              </ul>
                              <div class="card-footer d-flex justify-content-center">
                                   <a class="btn btn-danger" type="submit" href="Afif_Booking.php?cars=NissanPulsar">Book Now</a>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

     <!-- FOOTER -->

          <footer class=" bg-light mt-4">
               <div class="text-center p-3" style="color: gray;">
                    <h6 class="mt-2">Created by Afif_1202202154</h6>
               </div>
          </footer>
     </body>

     </html>