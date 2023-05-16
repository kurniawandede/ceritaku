<div class="continer m-5">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar cerita
    </div>
    <div class="card-body">
        <a href="<?php echo base_url(); ?>admin/dashboard/cerita/tambah" class="btn btn-primary float-left m-2">Tambah Cerita</a></h6>
     <div class="table-responsive">
    <table class="table table-bordered text-start" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Judul</th>
      <th scope="col">Sampul</th>
      <th scope="col">Isi cerita</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Kategori</th>
      <th scope="col">Rata-Rata Rating</th>
      <th scope="col">Penulis</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1;
     foreach ($cerita as $crt) : ?>
        
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $crt['id_cerita']; ?></td>
      <td><?php echo $crt['judul']; ?></td>
      <td><img src="<?php echo base_url('uploads/') . $crt['sampul']; ?>" width="100"></td>
      <td><?php echo $crt['isi_cerita']; ?></td>
      <td><?php echo $crt['tanggal']; ?></td>
      <td><?php echo $crt['nama_kategori']; ?></td>
      <td><?php echo $crt['rating']; ?></td>
      <td><?php echo $crt['fullname']; ?></td>
      </td>
      <td>
      <a href="<?php echo base_url() ?>admin/dashboard/cerita/edit/<?php echo $crt['id_cerita']; ?>" 
      class="badge badge-primary">Edit</a>
        <a href="<?php echo base_url(
          'admin/cerita/hapus/'.$crt['id_cerita']); ?>" 
        onclick="if(confirm('Apakah kamu yakin ingin menghapus cerita ini?'))
        {window.location.href=''}" 
        class="badge badge-danger">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>