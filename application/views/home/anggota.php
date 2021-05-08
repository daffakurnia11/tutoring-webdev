<div class="container mt-3 text-center">
  <h1>Daftar Anggota</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
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
          <th scope="row"><?php echo $i++; ?></th>
          <td><?php echo $user['nama'] ?></td>
          <td><?php echo $user['nrp'] ?></td>
          <td>
            <a href="<?php echo base_url('home/detail/') . $user['id']; ?>"><span class="badge badge-success">Detail</span></a>
            <a href="<?php echo base_url('home/delete/') . $user['id']; ?>"><span class="badge badge-danger">Hapus</span></a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>