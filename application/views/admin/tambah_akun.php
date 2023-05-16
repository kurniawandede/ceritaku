<div class="container">
    <h1>Tambah Akun</h1>
    <hr >
    <br>
    <?php echo validation_errors(); ?>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
    <?php endif; ?>
<form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/user/proses_tambah');?>">
<div class="row mb-5">
    <label for="inputfullName" class="col-sm-2 col-form-label" >Nama Lengkap</label>
    <div class="col-sm-7">
      <input type="text" name="fullname" class="form-control" id="inputfullName" placeholder="Masukan Nama Lengkap....">
    </div>
</div>
<div class="row mb-5">
    <label for="inputemail" class="col-sm-2 col-form-label" >Email</label>
    <div class="col-sm-7">
      <input type="text" name="email" class="form-control" id="inputemail" placeholder="Emailnya...">
    </div>
</div>
<div class="row mb-5">
    <label for="inputpassword" class="col-sm-2 col-form-label" >Password</label>
    <div class="col-sm-7">
      <input type="text" name="password" class="form-control" id="inputpassword" placeholder="Passwordnya...">
    </div>
</div>
<div class="row mb-5">
    <label for="inputKategori" class="col-sm-2 col-form-label">Role</label>
    <div class="col-sm-7">
    <select name="role" id="inputKategori" class="form-control">
                <option option selected disabled>Pilih Role:</option>
                <option option value="1" <?php echo set_select('role', '1'); ?>>Admin</option>
                <option option value="2" <?php echo set_select('role', '2'); ?>>Penulis</option>
                <option option value="3" <?php echo set_select('role', '3'); ?>>Pembaca</option>
            </select>
    </div>
</div>
<div class="col-md-9">
    <button type="submit" class="btn btn-primary float-right ml-3">Tambah</button>
  <button type="reset" class="btn btn-danger float-right">Reset</button>
</div>
</form>