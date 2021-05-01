<?php
// Koneksi Database
$db = mysqli_connect("localhost", "root", "", "tutoringroda");

function query($query)
{
  // Ambil variabel dari luar function
  global $db;

  // Ambil Data dari Tabel (Query)
  $result = mysqli_query($db, $query);
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

function ubah($data)
{
  // Ambil variabel dari luar function
  global $db;

  // Ambil Data dari Form
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);

  // Query buat masukkan data (Insert)
  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nrp = '$nrp',
            email = '$email',
            jurusan = '$jurusan'
            WHERE id = $id
  ";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function cari($keyword)
{
  $query = "SELECT * FROM mahasiswa 
        WHERE 
        nama LIKE '%$keyword%' OR
        nrp LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%'
  ";
  return query($query);
}
