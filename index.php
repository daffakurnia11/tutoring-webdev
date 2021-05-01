<?php
// Koneksi Database
$db = mysqli_connect("localhost", "root", "", "tutoringroda");

// Ambil Data dari Tabel (Query)
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

// Ambil Data dari Hasil Query (Fetch)
// mysqli_fetch_row()     mengembalikan array numeric
// mysqli_fetch_assoc()   mengembalikan array assosiatif
// mysqli_fetch_array()   mengembalikan array numeric dan assosiatif
// mysqli_fetch_object()  mengembalikan object (menggunakan panah)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <table border="1" cellpadding="10" cellspacing="3">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>NRP</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php while ($mahasiswa = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><?= $mahasiswa['nama'] ?></td>
        <td><?= $mahasiswa['nrp'] ?></td>
        <td><?= $mahasiswa['email'] ?></td>
        <td><?= $mahasiswa['jurusan'] ?></td>
      </tr>
    <?php endwhile ?>
  </table>
</body>

</html>