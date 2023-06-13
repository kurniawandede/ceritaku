<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerpenku</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style-cerita.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style-cerita.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/script.js">
</head>
<style>
    .ktgr:hover{
        background-color: #00C0B5;
    }
</style>
<body >
  <section class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="box-shadow: 1px 10px 5px -4px rgba(0,0,0,0.5);">
        <div class="container-fluid mx-5 py-2">
            <a class="navbar-brand f-color fw-bold" style="font-size: 1.7em;" href="<?php echo base_url(); ?>home">Cerpenku <span class="supertext">KELOMPOK 4</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                <li class="nav-item dropdown mx-5">
                <a class="nav-link dropdown-toggle fw-bold" style="font-size: 1.1em;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Penulis
                </a>
                <ul class="dropdown-menu border-0 shadow row" style="width: 50vh;">
                    <li>
                        <input
                            id="search-penulis"
                            class="rounded-3 w-100 p-1"
                            placeholder="Cari penulis..."
                        />
                    </li>
                    <?php foreach ($writer as $p) { ?>
                        <li class="penulis-item"><a class="dropdown-item text-decoration-none" href="<?php echo base_url(); ?>cerita/penulis/<?php echo $p['id_user']; ?>"><?php echo $p['fullname'] ?></a></li>
                    <?php } ?>
                </ul>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-bold" style="font-size: 1.1em;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori
                </a>
                <ul class="dropdown-menu border-0 shadow" style="width: 50vh;">
                    <div class="row px-2">
                    <?php foreach ($ktgr as $k) { ?>
                        <div class="col-md-4">
                            <li><a class="dropdown-item ktgr rounded-4" href="<?php echo base_url() ?>cerita/kategori/<?php echo $k['id_kategori']; ?>"><?php echo $k['nama_kategori']; ?></a></li>
                        </div>
                    <?php } ?>
                    </div>
                </ul>
            </ul>
            <form class="d-flex px-5" action="<?php echo base_url('cerita/cari'); ?>" method="get" role="search">
                <input class="form-control me-2 rounded-5" type="search" name="keyword" placeholder="Cari Cerita.." aria-label="Search">
                <button class="btn btn-outline-success rounded-5 cari f-color" style="border-color: #00C0B5;" type="submit">Search</button>
            </form>
            <?php if ($this->session->userdata('logged_in')) { ?>
                <div class="btn-group border-0">
                    <button class="btn border-0 btn-transparent btn-sm dropdown-toggle" 
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $this->session->userdata('fullname'); ?>
                    </button>
                    <ul class="dropdown-menu rounded-0 rounded-3">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>profile">Profile</a>
                    <?php if ($this->session->userdata('role') == 2) : ?>   
                    <a class="dropdown-item" href="<?php echo base_url(); ?>profile/publis">Publis Cerita</a>
                    <?php endif; ?>
                    <hr class="mb-0">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>login/logout">Logout</a>
                    </ul>
                </div>
            <?php } else { ?>
            <a href="<?php echo base_url(); ?>user/login" class="px-3"><button type="button" 
            class="btn btn-info border-0 rounded-5" style="background-color: #00C0B5;"><span 
            class="p-2 text-light fw-bold px-3">Login</span></button></a>
            <a href="<?php echo base_url(); ?>user/register"><button type="button" 
            class="btn btn-info border-0 rounded-5" style="background-color: #00C0B5;"><span 
            class="p-2 text-light fw-bold px-3">Daftar</span></button></a>
            <?php } ?>

            </div>
        </div>
    </nav>
</section>

<script>
    // Ambil elemen input pencarian dan daftar penulis
    const searchInput = document.getElementById('search-penulis');
    const penulisItems = document.querySelectorAll('.penulis-item');

    // Event listener untuk input pencarian
    searchInput.addEventListener('input', function() {
        const keyword = searchInput.value.toLowerCase();

        // Sembunyikan semua penulis
        penulisItems.forEach(function(item) {
            item.style.display = 'none';
        });

        // Tampilkan penulis yang sesuai dengan input pencarian
        penulisItems.forEach(function(item) {
            const penulisName = item.textContent.toLowerCase();
            if (penulisName.includes(keyword)) {
                item.style.display = 'block';
            }
        });
    });
</script>