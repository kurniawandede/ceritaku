<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style-cerita.css">
    <title>Daftar | Cerpenku</title>
</head>
<style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f2f2f2;
    }
  
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 350px;
      height: 450px;
      background-color: #ffffff;
      border-radius: 10px;
    }
  </style>

  <body>
    <form class="rounded-4" method="post" action="<?php echo site_url(); ?>register/proses_tambah" 
    style="box-shadow: 6px 10px 11px -4px rgba(0,0,0,0.75);">
        <h4 class="m-3">Daftar | <span class="f-color"><a href="<?php echo site_url('home'); ?>" 
        class="text-decoration-none f-color">Cerpenku</a></span></h4>
      <div class="mb-3 mt-4">
        <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label><br> -->
        <input type="text" name="fullname" class="form-control rounded-4" placeholder="Masukan Nama...">
      </div>
      <div class="mb-3 mt-2">
        <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label><br> -->
        <input type="email" name="email" class="form-control rounded-4" placeholder="Masukan Email...">
      </div>
      <div class="mb-3 mt-2">
        <!-- <label for="inPassword" class="form-label">Password</label><br> -->
        <input type="password" name="password" class="form-control rounded-4" placeholder="Masukan Password...">
      </div>
      <div class="mb-3 mt-2">
      <select name="role" id="inputKategori" class="form-control">
                <option option selected disabled>Pilih Role:</option>
                <option option value="2" <?php echo set_select('role', '2'); ?>>Penulis</option>
                <option option value="3" <?php echo set_select('role', '3'); ?>>Pembaca</option>
      </select>
      </div>
      <div class="px-3 mt-2">
        <button type="submit" class="btn btn-info border-0 rounded-5" style="background-color: #00C0B5;">
        <span class="p-2 text-light fw-bold px-3">Daftar</span></button>
      </div>
      <p style="font-size: 0.8em;" class="mt-3">Udah punya akun? <span class="f-color fw-bold">
        <a href="<?php echo site_url('user/login'); ?>" class="text-decoration-none f-color">Login disini</a>
      </span></p>
    </form>
  </body>
  
</html>