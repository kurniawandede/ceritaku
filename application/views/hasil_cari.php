<section>
    <div class="container mt-5 p-5">
        <div class="row">
            <?php if (!empty($hasil_pencarian)) : ?>
                <h1>Hasil Pencarian : <?php echo $keyword ?> (<?php echo count($hasil_pencarian) ?>)</h1>
                <?php foreach ($hasil_pencarian as $cerita) : ?>
                    <div class="col-md-3 g-5">
                        <div class="card" style="width: 17rem; height: 35rem; box-shadow: 3px 3px 5px 0px rgba(0,0,0,0.75);">
                            <img src="<?php echo base_url('uploads/') . $cerita['sampul']; ?>" class="img-fluid rounded-start object-fit-cover rounded-3" alt="...">
                            <div class="card-body">
                                <a href="<?php echo base_url('cerita/viewcerita/'.$cerita['id_cerita']); ?>" class="text-decoration-none text-dark">
                                    <span class="f-color"><?php echo $cerita['nama_kategori']; ?></span>
                                    <h4 class="card-title"><?php echo $cerita['judul']; ?></h4>
                                </a>
                                <p class="card-text">Penulis: <span class="f-color fw-bold"><?php echo $cerita['fullname']; ?></span></p>
                            </div>
                            <div class="viewer px-3" style="padding-bottom: 10px;">
                            <?php if (isset($cerita['rating_avg']) && $cerita['rating_avg'] > 0) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <!-- kode SVG -->
                                </svg>
                                <span style="margin-top: 2%;" class="m-2 fw-bold"><?php echo number_format($cerita['rating_avg'], 1); ?></span>
                            <?php else : ?>
                                <span style="margin-top: 2%;" class="m-2 fw-bold">Belum ada rating</span>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Tidak ada hasil pencarian.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
