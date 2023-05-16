<div class="continer m-5">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Akun Admin
    </div>
    <div class="card-body">
        <a href="<?php echo base_url();?>admin/dashboard/akun/tambah" class="btn btn-primary float-left m-2">Tambah Akun</a></h6>
     <div class="table-responsive">
    <table class="table table-bordered text-start" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1;
     foreach ($akun as $akun) : ?>
        
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $akun['id_user']; ?></td>
      <td><?php echo $akun['fullname']; ?></td>
      <td><?php echo $akun['email']; ?></td>
      <td><?php echo $akun['password']; ?></td>
      <td>
      <?php
        if ($akun['role'] == 1) {
          echo "Admin";
        } else if ($akun['role'] == 2) {
          echo "Penulis";
        } else if ($akun['role'] == 3) {
          echo "Pembaca";
        }
      ?>  
      </td>
      <td>
      <a href="<?php echo base_url() ?>admin/dashboard/akun/edit/<?php echo $akun['id_user']; ?>" class="badge badge-primary">Edit</a>
        <a href="<?php echo base_url('admin/user/hapus/'.$akun['id_user']); ?>" onclick="if(confirm('Apakah kamu yakin ingin menghapus akun ini?')){window.location.href=''}" class="badge badge-danger">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>