<div class="container mt-3">
  <h1 class="text-center">Daftar Anggota</h1>
  <a href="<?php echo base_url('home/tambah') ?>" class="btn btn-primary my-3">Tambah Data</a>
  <table class="table table-bordered">
    <thead>
      <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NRP</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($users as $user) : ?>
        <tr>
          <th scope="row" class="text-center"><?php echo $i++; ?></th>
          <td><?php echo $user['nama'] ?></td>
          <td><?php echo $user['nrp'] ?></td>
          <td class="text-center">
            <a href="<?php echo base_url('home/detail/') . $user['id']; ?>"><span class="badge badge-success">Detail</span></a>
            <a href="<?php echo base_url('home/delete/') . $user['id']; ?>"><span class="badge badge-danger">Hapus</span></a>
            <a href="<?php echo base_url('home/ubah/') . $user['id']; ?>"><span class="badge badge-primary">Ubah</span></a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>