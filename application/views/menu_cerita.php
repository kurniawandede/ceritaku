
    
    <style>
        .nav-item a[href="<?php echo base_url(); ?>cerita"] {
        text-decoration: underline;
        text-decoration-color: #00C0B5;
        text-decoration-thickness: 7px;
        text-underline-offset: 18px;
        }
        .img-fluid {
          width: 300px;
          height: 300px;
          object-fit: cover;
        }

    </style>
    <section style="margin-top: 7.5vh;">
        <div class="mine-color" style="margin-bottom: 0;">
            <p style="width: 100%; height: 100%;">-</p>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="box-shadow: 1px 10px 5px -4px rgba(0,0,0,0.5);">
            <div class="container-fluid mx-5">
                <div>
                    <div class="container">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                      <li class="nav-item mx-5">
                          <a class="nav-link active fw-bolder" style="font-size: 1.3em;" aria-current="page" href="<?php echo base_url(); ?>cerita/top-view">Terbaru</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active fw-bolder" style="font-size: 1.3em;" aria-current="page" href="<?php echo base_url(); ?>cerita">Daftar Cerita</a>
                        </li>
                        
                        <li class="nav-item mx-4">
                          <a class="nav-link active fw-bolder" style="font-size: 1.3em;" aria-current="page" href="<?php echo base_url(); ?>cerita/top-rating">Top Rating</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="container mt-5 p-5">
            <div class="row">
                <?php foreach ($cerita as $c) { ?>
                  <?php
                // Mengambil ID cerita
                $id_cerita = $c['id_cerita'];

                // Menghitung rating rata-rata
                $query = $this->db->select_avg('rating')->where('id_cerita', $id_cerita)->get('tbl_review');
                $rating_avg = $query->row()->rating;

                ?>
                  <div class="col-md-3 g-5">
                    <div class="card" style="width: 15rem;box-shadow: 6px 5px 20px 0px rgba(0,0,0,0.75);">
                      <img src="<?php echo base_url('uploads/') . $c['sampul']; ?>" class="img-fluid rounded-start object-fit-cover rounded-3" alt="...">
                      <div class="card-body">
                        <a href="<?php echo base_url('cerita/viewcerita/'.$c['id_cerita']); ?>" class="text-decoration-none text-dark">
                          <h4 class="card-title"><?php echo $c['judul']; ?></h4>
                        </a>
                        <p class="card-text">Penulis : <span class="f-color fw-bold"><?php echo $c['fullname']; ?></span></p>
                      </div>
                          <div class="viewer px-3" style="padding-bottom:10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                            <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                          </svg><span style="margin-top: 2%;" class="m-2 fw-bold"><?php if ($rating_avg > 0) {
                            echo number_format($rating_avg, 1);
                          }else {
                            echo "Belum ada rating";
                          }  ?></span>
<!--                           
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill ms-auto" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg><span>1440</span> -->
                          </div>
                      </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
      
</body>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>