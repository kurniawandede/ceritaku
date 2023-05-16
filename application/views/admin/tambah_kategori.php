<div class="container">
    <h1>Tambah Kategori</h1>
    <hr >
    <br>
<form method="post" enctype="multipart/form-data" 
action="<?php echo base_url('admin/kategori/proses_tambah');?>">
<div class="row mb-5">
    <label for="inputfullName" 
    class="col-sm-2 col-form-label" >Kategori</label>
    <div class="col-sm-7">
      <input type="text" name="nama_kategori" 
      class="form-control" id="inputfullName" placeholder="Nama Kategori...">
    </div>
</div>
<div class="col-md-9">
    <button type="submit" class="btn btn-primary float-right ml-3">Tambah</button>
  <button type="reset" class="btn btn-danger float-right">Reset</button>
</div>
</form>