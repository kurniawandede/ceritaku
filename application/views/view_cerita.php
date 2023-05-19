<style>
    .img-fluid {
          width: 300px;
          height: 420px;
          object-fit: cover;
        }
        .rating {
    display: inline-block;
    font-size: 0;
    user-select: none;
  }

  .rating input[type="radio"] {
    display: none;
  }

  .rating label {
    display: inline-block;
    padding: 10px;
    font-size: 45px;
    color: #ddd;
    cursor: pointer;
  }
  .hasRating label {
    display: inline-block;
    padding: 10px;
    font-size: 45px;
    color: #ffcc00;
    cursor: pointer;
  }

  .rating label:hover,
  .rating input[type="radio"]:checked ~ label {
    color: #ffcc00;
  }
  
</style>
<body style="background-color: #00C0B5;">    
    <section class="container rounded-4 p-5" style="background-color: #ffffff;box-shadow: 1px 10px 5px -4px rgba(0,0,0,0.5);" >
        <div class="row" style="margin-top: 7.5vh;">
            <div class="col-md-1 offset-1">
                <a href="<?php echo base_url(); ?>cerita">
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" fill="currentColor" class="bi bi-skip-backward-circle-fill f-color" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.79-2.907L8.5 7.028V5.5a.5.5 0 0 0-.79-.407L5 7.028V5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0V8.972l2.71 1.935a.5.5 0 0 0 .79-.407V8.972l2.71 1.935A.5.5 0 0 0 12 10.5v-5a.5.5 0 0 0-.79-.407z"/>
                  </svg>
                </a>
            </div>
            <div class="col-md-3">
                <img src="<?php echo base_url('/uploads/') . $cerita['sampul']; ?>" class="img-fluid rounded-5" alt="">
            </div>
            <div class="col-md-7">
                <h1><?php echo $cerita['judul']; ?></h1>
                <p>Kategori : <span class="f-color"><?php echo $cerita['nama_kategori']; ?></span></p>
                <p>Ditulis oleh : <span class="f-color"><?php echo $cerita['fullname']; ?></span></p>
                <p>Tanggal Rilis : <span class="f-color"><?php echo $cerita['tanggal']; ?></span></p>
                <div class="viewer">Rating :
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                      <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                    </svg><span style="margin-top: 2%;" class="m-2 fw-bold"><?php echo number_format($rating_avg, 1, '.', ''); ?></span>
<!--                     
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill ms-auto" viewBox="0 0 16 16">
                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg><span>1440</span> -->
                    </div>
            </div>
            <div class="row mt-3 container">
                <div class="mx-4">
                <?php
                if ($this->session->userdata('logged_in')) {
                    echo $cerita['isi_cerita']; // Tampilkan seluruh isi cerita jika pengguna sudah login
                } else {
                    $excerpt = implode(' ', array_slice(explode(' ', $cerita['isi_cerita']), 0, 50)); // Potong teks menjadi 20 kata pertama
                    echo $excerpt . '...'; // Tampilkan cuplikan cerita
                }
                ?>
                <?php if ($this->session->userdata('logged_in')) { ?>
                    <!-- Kode untuk pengguna yang sudah login -->
                <?php } else { ?>
                    <p><a class="f-color" href="<?php echo base_url(); ?>user/login">Membaca Selengkapnya..</a></p>
                    
                <?php } ?>
                </div>
            </div>
            <hr>
            <div class="row mt-5 mb-5">
            
            <?php
            // Periksa apakah pengguna sudah memberikan rating sebelumnya
            $previous_rating = $this->db->get_where('tbl_review', array('id_cerita' => $cerita['id_cerita'], 'id_user' => $this->session->userdata('id_user')))->row();

            if ($previous_rating) {
                // Jika pengguna sudah memberikan rating sebelumnya, tampilkan rating pengguna
                $rating_value = $previous_rating->rating;
                $review_value = $previous_rating->review;
            ?>
                <div>
                    <h4>Kamu sudah memberikan rating ke cerita ini:</h4>
                    <div class="hasRating">
                        <input type="radio" hidden id="star5" class="star" name="rating" value="5" /><label for="star5" title="5 stars">☆ <span style="font-size: 0.4em;"><?php echo $rating_value; ?></span></label>
                    </div>
                    <div>
                        <p>Reviewmu:</p>
                        <div class="border p-3 rounded-5" style="width: 80%;"><?php echo $review_value ?></div>
                    </div>
                </div>
            <?php } else { ?>
            <form method="post" action="<?php echo base_url('cerita/save_rating/'.$cerita['id_cerita']); ?>">
            <p>Suka dengan ceritanya? Yuk Bantu Rating dan kasih review</p>
            <div class="form-group">
                <div class="rating">
                    <input type="radio" id="star5" class="star" name="rating" value="5" /><label for="star5" title="5 stars">☆ <span style="font-size: 0.4em;">5</span></label>
                    <input type="radio" id="star4" class="star" name="rating" value="4" /><label for="star4" title="4 stars">☆ <span style="font-size: 0.4em;">4</span></label>
                    <input type="radio" id="star3" class="star" name="rating" value="3" /><label for="star3" title="3 stars">☆ <span style="font-size: 0.4em;">3</span></label> 
                    <input type="radio" id="star2" class="star" name="rating" value="2" /><label for="star2" title="2 stars">☆ <span style="font-size: 0.4em;">2</span></label>
                    <input type="radio" id="star1" class="star" name="rating" value="1" /><label for="star1" title="1 star">☆ <span style="font-size: 0.4em;">1</span></label>
                </div>
            </div>

            <div class="form-floating col-md-8 mt-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="review" style="height: 100px"></textarea>
                <label for="floatingTextarea2"><span class="p-4"> Masukan reviewmu....</span></label>
            </div>
            <?php if ($this->session->userdata('logged_in')) { ?>
            <button type="submit" class="btn btn-info border-0 rounded-5 mt-2 " style="background-color: #00C0B5;"><span class="p-2 text-light fw-bold px-3">Kirim</span></button>
            <?php } else { ?>
                <p class="text-danger mx-2">! Login terlebih dahulu jika ingin mereview. <a class="f-color" href="<?php echo base_url(); ?>user/login">Login</a></p>
                <a href="<?php echo base_url(); ?>user/login"><button type="button" class="btn btn-info border-0 rounded-5 mt-2 " style="background-color: #00C0B5;"><span class="p-2 text-light fw-bold px-3">Kirim</span></button></a>
            <?php } ?>
            </form>
            <?php } ?>


                
                <!-- <div class="inline">
                <div class="rating">
                    <span class="star" data-rating="1"></span>
                    <span class="star" data-rating="2"></span>
                    <span class="star" data-rating="3"></span>
                    <span class="star" data-rating="4"></span>
                    <span class="star" data-rating="5"></span>
                </div>
            </div> -->
            <span class="fw-bold mt-5">Review(909)</span>
            <hr>
            <div class="row mt-2">
                <span class="fw-bold f-color mx-4">uSER_87</span>
                <div class="inline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star-fill mx-1" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star-fill mx-1" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star-fill mx-1" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star-half mx-1" viewBox="0 0 16 16">
                        <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                      </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star mx-1" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                    </div>
                    <div class="review">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum doloribus fugiat cum? Quisquam saepe deleniti iusto adipisci accusamus facilis debitis recusandae, veniam illo commodi reiciendis iure sapiente libero. Aliquam quia deleniti voluptates officia. Quasi tempore earum numquam dicta omnis doloremque?</p>
                    </div>
            </div>
            <hr>
            <div class="row mt-2">
                <span class="fw-bold f-color mx-4">uSER_8798</span>
                <div class="inline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star-fill mx-1" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star-fill mx-1" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star-fill mx-1" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star-fill mx-1" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star-fill mx-1" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    </div>
                    <div class="review">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum doloribus fugiat cum? Quisquam saepe deleniti iusto adipisci accusamus facilis debitis recusandae, veniam illo commodi reiciendis iure sapiente libero. Aliquam quia deleniti voluptates officia. Quasi tempore earum numquam dicta omnis doloremque?</p>
                    </div>
            </div>
            <hr>
        </div>
    </section>
    </body>