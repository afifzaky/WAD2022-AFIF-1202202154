    <?php
    session_destroy();
    ?>
    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title>Login</title>
        </head>
        <body> 
            <?php
            if (isset($_SESSION["keluar"])){
                ?>
                <div class="alert alert-success alert-dismissible fade show" id="alertkeluar">
                    Logout Success
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                session_destroy();
                }
            ?>
            <div class="alert alert-success alert-dismissible fade show" id="alertberhasil">
                Registration Success
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <script>
                var berhasil = document.getElementById('alertberhasil');
                berhasil.style.display = 'none'
            </script>
            <?php
            if ( isset($_SESSION["sukses"])){
                echo "
                <script>
                    berhasil.style.display = 'block'
                </script>
                ";
                session_destroy();
            }
            ?>
            <div class="alert alert-danger alert-dismissible fade show" id="alertgagal">
                Login Failed
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="d-flex container mt-5 justify-content-end">
            <div class="d-flex container mt-5 justify-content-start">
                    <div>
                    <img src="https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2022/01/kolaborasi-initial-d-toyota-1.jpg" class="rounded float-start">
                    <div>
                    <img src="<?php echo "https://i.ibb.co/QfDK8Nj/logo-ead.png" ?>" alt="logoead" style="width:100px;">
                    </div>
                    </div>
                <div class="bg-white" style="width: 30rem;">
                    <h3 class="text-start m-3">Login</h3>
                    <hr class="ms-2 me-2 mt-0 mb-0">
                    <div class="card-body">
                        <form action="" method="post">
                            <label class="mb-2" for="email">Email</label><br>
                            <input class="form-control mb-2" type="text" name="email" id="email" required placeholder="Masukkan alamat E-mail">
                            <label class="mb-2" for="pass">Kata Sandi</label><br>
                            <input class="form-control mb-2" type="Password" name="password" id="pass" required placeholder="Kata Sandi Anda">
                            <div>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember me</label>
                            </div>
                            <div class="text-start pt-2 mb-2 mt-2">
                                <button class="btn btn-danger" type="submit" name="submit" onclick="" style="width: 150px">Login</button>
                            </div>
                        </form>
                        <div class="text-center d-flex justify-content-start">
                            <p class="me-1">You Don't Have an Account? ?</p>
                            <a href="register.php">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script>
                var gagal = document.getElementById('alertgagal');
                gagal.style.display = 'none'
            </script>
        </body>
    </html>
    <?php
    $sqlconn = mysqli_connect("localhost", "root", "", "wad_modul4_afif");
    if (isset($_POST["submit"])){
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $queryget = "SELECT * FROM user_afif WHERE email = '$email'";
        $accget = mysqli_query($sqlconn, $queryget);
        $row = mysqli_fetch_assoc($accget);
        if ( $pass == $row["password"]){
            $_SESSION["newlogin"] = true;
            if (isset($_POST["remember"])){
                setcookie('id', $row["id"], strtotime('+7 days'), '/');
                echo "<script> location.href='../index.php'; </script>";
                exit;
            }else{
                $_SESSION["sementara"] = $row["id"];
                echo "<script> location.href='../index.php'; </script>";
                exit;
            }
        }else{
            echo"
            <script>
                    gagal.style.display = 'block'
            </script>
            ";
        }
    }
    ?>