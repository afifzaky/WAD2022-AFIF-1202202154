<?php
require './koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_afif WHERE id_mobil = $id";

if (mysqli_query($koneksi, $sql)) {
  header("location: ../pages/List.php");
} else {
  echo "Gagal";
}
