<?php
require 'functions.php';

// Ambil Data dari ID
$id = $_GET['id'];

// Query Data dari ID
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['submit'])) {
  if (ubah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil diubah');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal diubah');
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
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h1>Ubah Data Mahasiswa</h1>
  <ul>
    <form action="" method="post">
      <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
      <li>
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" required value="<?= $mahasiswa['nama'] ?>">
      </li>
      <li>
        <label for="nrp">NRP : </label>
        <input type="text" id="nrp" name="nrp" required value="<?= $mahasiswa['nrp'] ?>">
      </li>
      <li>
        <label for="email">Email : </label>
        <input type="text" id="email" name="email" required value="<?= $mahasiswa['email'] ?>">
      </li>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" id="jurusan" name="jurusan" required value="<?= $mahasiswa['jurusan'] ?>">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Data</button>
      </li>
    </form>
  </ul>
</body>

</html>