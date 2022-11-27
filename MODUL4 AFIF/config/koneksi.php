<?php
$koneksi = new mysqli("localhost", "root", "", "wad_modul4_afif");
if (!$koneksi) {
  die("Koneksi Gagal: " . $koneksi->connect_error);
}