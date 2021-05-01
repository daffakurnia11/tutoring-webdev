<?php
require 'functions.php';
if (isset($_POST['submit'])) {
  if (tambah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'index.php';
      </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>
  <ul>
    <form action="" method="post">
      <li>
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama">
      </li>
      <li>
        <label for="nrp">NRP : </label>
        <input type="text" id="nrp" name="nrp">
      </li>
      <li>
        <label for="email">Email : </label>
        <input type="text" id="email" name="email">
      </li>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" id="jurusan" name="jurusan">
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>
    </form>
  </ul>
</body>

</html>