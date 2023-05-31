<style>
        .nav-item a[href="<?php echo base_url(); ?>profile/publis"] {
        text-decoration: underline;
        text-decoration-color: #00C0B5;
        text-decoration-thickness: 7px;
        text-underline-offset: 18px;
        }

    </style>
<section style="margin-top: 7.5vh;">
        <div class="mine-color" style="margin-bottom: 0;">
            <p style="width: 100%; height: 100%;">-</p>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="box-shadow: 1px 10px 5px -4px rgba(0,0,0,0.5);">
            <div class="container-fluid mx-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="container">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                        <li class="nav-item">
                        <a class="nav-link active fw-bolder" style="font-size: 1.3em;" aria-current="page" href="<?php echo base_url(); ?>profile">Profiles</a>
                        </li>
                        <li class="nav-item mx-5">
                          <a class="nav-link active fw-bolder" style="font-size: 1.3em;" aria-current="page" href="<?php echo base_url(); ?>profile/ceritamu">Cerita Kamu</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active fw-bolder" style="font-size: 1.3em;" aria-current="page" href="<?php echo base_url(); ?>profile/publis">Rilis Cerita</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="container mt-5 p-5">
            <div class="row px-5">
                
                <h2 class="mb-5">Ayo Publis Cerita kamu</h2>
                <div class="col-md-10">
                    <?php if ($this->session->userdata('logged_in')) { ?>
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('profile/input');?>">
                        <div class="mb-4">
                            <label for="disabledTextInput" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul ceritamu..." style="border-color: #00C0B5;">
                        </div>
                        <div class="mb-4">
                            <label for="disabledTextInput" class="form-label">Sampul</label>
                            <input type="file" name="sampul" class="form-control" placeholder="Sampul ceritamu..." style="border-color: #00C0B5;" onchange="checkFileSize(this)">
                            <span id="fileSizeError" style="color: red; display: none;">Ukuran file terlalu besar. Silakan pilih file yang lebih kecil dari 2 MB.</span>
                        </div>
                        <div class="mb-4">
                            <label for="cerita" class="form-label">Isi Cerita</label>
                            <textarea name="isi_cerita" class="form-control" placeholder="Ketik ceritamu..." rows="10" style="border-color: #00C0B5;"></textarea>
                        </div>
                        <div class="mb-4">
                        <label for="disabledTextInput" class="form-label">Kategori Cerita kamu</label>
                        <select name="id_kategori" id="inputKategori" class="form-control" style="border-color: #00C0B5;">
                            <option disabled selected>Kategori: </option>
                            <?php foreach($kategori as $row){ ?>
                                <option value="<?php echo $row->id_kategori ?>"><?php echo $row->nama_kategori ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <?php } ?>
                        <div class="d-flex justify-content-end">
                            <div class="buttonedit">
                                <button type="submit" class="btn btn-info border-0 rounded-5" style="background-color: #00C0B5;"><span class="p-1 text-light fw-bold p-5">Publis</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
function checkFileSize(fileInput) {
  var fileSize = fileInput.files[0].size; // Mendapatkan ukuran file dalam bytes
  var maxSize = 2 * 1024 * 1024; // Batas ukuran file (2 MB)

  if (fileSize > maxSize) {
    document.getElementById("fileSizeError").style.display = "block";
    fileInput.value = ""; // Mengosongkan input file
  } else {
    document.getElementById("fileSizeError").style.display = "none";
  }
}
</script>