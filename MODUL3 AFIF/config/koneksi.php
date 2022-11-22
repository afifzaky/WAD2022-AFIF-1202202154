  <?php
  $koneksi = new mysqli("localhost", "root", "", "modul_3_afif");

  if (!$koneksi) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
  }
