<div class="continer m-5">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kategori
    </div>
    <div class="card-body">
        <a href="<?php echo base_url(); ?>admin/dashboard/kategori/tambah" class="btn btn-primary float-left m-2">Tambah Kategori</a></h6>
     <div class="table-responsive">
    <table class="table table-bordered text-start" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Kategori</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;
     foreach ($ktgr as $kategori) : ?>
        
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $kategori['id_kategori']; ?></td>
      <td><?php echo $kategori['nama_kategori']; ?></td>
      <td>
      <a href="<?php echo base_url() ?>admin/dashboard/kategori/edit/<?php echo 
      $kategori['id_kategori']; ?>" class="badge badge-primary">Edit</a>
        <a href="<?php echo base_url('admin/kategori/hapus/'.$kategori['id_kategori']); 
        ?>" onclick="if(confirm('Apakah kamu yakin ingin menghapus kategori ini?')){window.location.href=''}" 
        class="badge badge-danger">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>