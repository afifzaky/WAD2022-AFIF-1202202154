<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        <?php include '../asset/style/index.css'; ?>
    </style>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                        <a class="nav-link" style="color: white;" href="../index.php">Home</a>
                        <a class="nav-link" style="color: white;" href="../pages/List-Afif.php">MyCar</a>
                </div>
                <a href="../pages/Addfile-Afif.php" style="background-color: white; color:green; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;">Add Car</a>
            </div>
            <div class="dropdown" style="margin-left:20px;">
                <a class="btn btn-danger dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                </a>
                <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../login/profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="../login/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h2 class="fw-bold text-center">Profile</h2>
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                        <div class="mb-3 row position-relative">
                            <label for="email" class="col-sm-2 col-form-label text-muted">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext text-muted" id="email" name="email">
                            </div>
                        </div>
                        <div class="mb-3 row position-relative">
                            <label for="nama" class="col-sm-2 col-form-label text-muted">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-muted" id="nama" name="nama">
                            </div>
                        </div>
                        <div class="mb-3 row position-relative">
                            <label for="no_hp" class="col-sm-2 col-form-label text-muted">Nomor Handphone</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control text-muted" id="nohp" name="nohp">
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3 row position-relative">
                            <label for="password" class="col-sm-2 col-form-label text-muted">Kata Sandi</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control text-muted" id="pass" name="pass" placeholder="Kata Sandi">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="konfimasi_password" class="col-sm-2 col-form-label text-muted">Konfirmasi Kata Sandi</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control text-muted" id="repass" name="repass" placeholder="Konfirmasi Kata Sandi">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="warna_navbar" class="col-sm-2 col-form-label text-muted">Warna Navbar</label>
                            <div class="col-sm-10">
                                <select class="form-select text-muted" aria-label="Warna Navbar" id="warnanavbar" name="warnanavbar">
                                </select>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-danger">Update Profile</button>
                        </div>
                </form>
            </div>
        </div>
        <div class="d-flex align-items-center logo-ead">
            <img src="../asset/images/logo-ead.png" width="100">
            <span class="ms-5 text-muted">Afif_1202202154</span>
        </div>
    </div>
</body>
</html>