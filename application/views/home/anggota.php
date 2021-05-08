<div class="container mt-3 text-center">
  <h1>Daftar Anggota</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">NRP</th>
        <th scope="col">Jurusan</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($users as $user) : ?>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
          <td><?php echo $user['nama'] ?></td>
          <td><?php echo $user['email'] ?></td>
          <td><?php echo $user['nrp'] ?></td>
          <td><?php echo $user['jurusan'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>