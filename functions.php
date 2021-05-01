<?php
// Koneksi Database
$db = mysqli_connect("localhost", "root", "", "tutoringroda");

function query($query)
{
  // Ambil variabel dari luar function
  global $db;

  // Ambil Data dari Tabel (Query)
  $result = mysqli_query($db, "SELECT * FROM mahasiswa");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
