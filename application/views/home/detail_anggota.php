<div class="container mt-3">
  <h2>Data <?php echo $user['nama'] ?></h2>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $user['nama'] ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo $user['nrp'] ?></h6>
      <p class="card-text">Email : <?php echo $user['email'] ?></p>
      <p class="card-text">Jurusan : <?php echo $user['jurusan'] ?></p>
      <a href="<?php echo base_url('home/anggota') ?>" class="card-link">Kembali ke Daftar</a>
    </div>
  </div>
</div>