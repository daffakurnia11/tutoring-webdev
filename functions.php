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
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);

  // Query buat masukkan data (Insert)
  $query = "INSERT INTO mahasiswa
            VALUES
            ('', '$nama', '$nrp', '$email', '$jurusan')
  ";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function hapus($id)
{
  // Ambil variabel dari luar function
  global $db;

  mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
  return mysqli_affected_rows($db);
}
