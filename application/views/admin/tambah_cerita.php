<div class="container">
    <h1>Tambah Cerita</h1>
    <hr >
    <br>
    <?php echo validation_errors(); ?>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
    <?php endif; ?>
<form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/cerita/input');?>">
<div class="row mb-5">
  <label for="formFileSm" class="col-sm-2 col-form-label">Sampul Cerita</label>
  <div class="col-sm-7">
  <input class="" name="sampul" id="formFileSm" type="file">
  </div>
</div>
<div class="row mb-5">
    <label for="inputfullName" class="col-sm-2 col-form-label" >Judul</label>
    <div class="col-sm-7">
      <input type="text" name="judul" class="form-control" id="inputfullName" placeholder="Judul...">
    </div>
</div>
<div class="row mb-5">
  <label for="inputemail" class="col-sm-2 col-form-label">Isi Cerita</label>
  <div class="col-sm-7 form-floating">
    <textarea class="form-control" placeholder="Masukan Cerita di sini" name="isi_cerita" 
    id="floatingTextarea2" style="height: 500px;"></textarea>
  </div>
</div>

<div class="row mb-5">
    <label for="inputKategori" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-7">
    <select name="id_kategori" id="inputKategori" class="form-control">
      <option disabled selected>Kategori: </option>
      <?php foreach($kategori as $row){ ?>
        <option value="<?php echo $row->id_kategori ?>"><?php echo $row->nama_kategori ?></option>
      <?php } ?>
    </select>
    </div>
</div>
<div class="col-md-9">
    <button type="submit" class="btn btn-primary float-right ml-3">Tambah</button>
  <button type="reset" class="btn btn-danger float-right">Reset</button>
</div>
</form>