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

function tambah($data)
{
  // Ambil variabel dari luar function
  global $db;

  // Ambil Data dari Form
  $nama = $data['nama'];
  $nrp = $data['nrp'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];

  // Query buat masukkan data (Insert)
  $query = "INSERT INTO mahasiswa
            VALUES
            ('', '$nama', '$nrp', '$email', '$jurusan')
  ";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}
