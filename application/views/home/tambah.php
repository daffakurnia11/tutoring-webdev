<div class="container mt-3">
  <div class="row">
    <div class="col-6">
      <h1 class="my-3">Tambah Anggota Baru</h1>
      <form action="" method="post">
        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama') ?>">
            <?php echo form_error('nama', '<span class="text-danger">', '</span>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="nrp" class="col-sm-2 col-form-label">Nrp</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nrp" name="nrp" value="<?php echo set_value('nrp') ?>">
            <?php echo form_error('nrp', '<span class="text-danger">', '</span>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email') ?>">
            <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo set_value('jurusan') ?>">
            <?php echo form_error('jurusan', '<span class="text-danger">', '</span>'); ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>