<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
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
  <a href="insert.php">Tambah Data Mahasiswa</a>
  <br><br>
  <table border="1" cellpadding="10" cellspacing="3">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>NRP</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><?= $mhs['nama'] ?></td>
        <td><?= $mhs['nrp'] ?></td>
        <td><?= $mhs['email'] ?></td>
        <td><?= $mhs['jurusan'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>