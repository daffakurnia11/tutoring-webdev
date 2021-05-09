<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <style>
    body {
      background-color: lightgray;
    }

    .row {
      height: 95vh;
    }

    .container {
      border: 2px solid black;
      border-radius: 20px;
      background-color: white;
    }
  </style>
  <title>Halaman Login</title>
</head>

<body>
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-4 px-4">
      <div class="container px-5">
        <form action="" method="post">
          <h1 class="text-center m-4">Form Login</h1>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email..." value="<?php echo set_value('email') ?>">
            <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password...">
            <?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-success my-3">Login!</button>
            <a href="<?= base_url('auth/register'); ?>" class="d-block">Belum daftar? Daftar Sekarang!</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>