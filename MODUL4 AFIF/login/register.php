<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Register</title>
    </head>
    <body>
        <div class="alert alert-danger alert-dismissible fade show" id="alertgagal">
            Registration Failed
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="d-flex container mt-5 justify-content-end">
        <div class="d-flex container mt-5 justify-content-start">
                <div>
                <img src="https://steamuserimages-a.akamaihd.net/ugc/771652420847770988/57E0A4500DAD373220BAB6B40B32B0025738D612/?imw=512&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" class="rounded float-start">
                <div>
                <img src="<?php echo "https://i.ibb.co/QfDK8Nj/logo-ead.png" ?>" alt="logoead" style="width:100px;">
                </div>
                </div>
            <div class="bg-white" style="width: 35rem;">
                <h3 class="text-start m-3">Register</h3>
                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="card-body">
                    <form action="" method="post">
                        <label class="mb-2" for="nama">Nama</label><br>
                        <input class="form-control mb-2" type="text" name="nama" id="nama" required placeholder="Masukkan nama lengkap">
                        <label class="mb-2" for="email">Email</label><br>
                        <input class="form-control mb-2" type="text" name="email" id="email" required placeholder="Masukkan alamat E-mail">
                        <label class="mb-2" for="nohp">Nomor Handphone</label><br>
                        <input class="form-control mb-2" type="text" name="nohp" id="nohp" required placeholder="Masukkan Nomor Handphone">
                        <label class="mb-2" for="pass">Kata Sandi</label><br>
                        <input class="form-control mb-2" type="Password" name="pass" id="pass" required placeholder="Kata Sandi Anda">
                        <label class="mb-2" for="repass">Konfirmasi Kata Sandi</label><br>
                        <input class="form-control mb-2" type="Password" name="repass" id="repass" required placeholder="Konfirmasi Kata Sandi Anda">
                        <div class="text-start pt-2 mb-2">
                            <button class="btn btn-danger" type="submit" name="submit" onclick="" style="width: 150px">Register</button>
                        </div>
                    </form>
                    <div class="text-center d-flex justify-content-start">
                        <p class="me-1">Already Have Account ?</p>
                        <a href="login.php">Login</a>
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
$sqlconnect = mysqli_connect("localhost", "root", "", "wad_modul4_afif");
if (isset($_POST["submit"])){
    if (($_POST["pass"]) == ($_POST["repass"])){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $nohp = $_POST["nohp"];
        $pass = mysqli_real_escape_string($sqlconnect, $_POST["pass"]);
        $query = "INSERT INTO user_afif
        VALUES
        ('', '$nama', '$email', '$pass', '$nohp')
        ";
        mysqli_query($sqlconnect, $query);
        if (mysqli_affected_rows($sqlconnect) > 0) {
            $_SESSION["sukses"] = "berhasil";
            echo "
            <script>
                document.location.href = './login.php';
            </script>
            ";
        } else {
            echo "
            <script>
                gagal.style.display = 'block'
            </script>
            ";
        }
    } else {
        echo"
        <script>
                gagal.style.display = 'block'
        </script>
        ";
    }
}
?>