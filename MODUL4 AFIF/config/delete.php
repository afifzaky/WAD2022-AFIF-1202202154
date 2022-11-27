<?php
require './koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM showroom_afif_table WHERE id_mobil = $id";
if (mysqli_query($koneksi, $sql)) {
  header("location: ../pages/List-Afif.php");
} else {
  echo "Gagal";
}
