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
  .hasRatingAll label {
    display: inline-block;
    padding: 10px;
    font-size: 30px;
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
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('cerita/proses_edit/'.$cerita['id_cerita']); ?>">
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
                <label for="disabledTextInput" class="form-label mt-3">Judul</label>
                <input type="text" name="judul" class="form-control" value="<?php echo $cerita['judul']; ?>" style="border-color: #00C0B5;">
            </div>
            <div class="row mt-3">
                <div>
                <textarea name="isi_cerita" class="form-control" placeholder="Ketik ceritamu..." rows="10" style="border-color: #00C0B5;">
                <?php
                    echo ($cerita['isi_cerita'])
                ?>
                </textarea>
            </div>
                <button type="submit" class="btn btn-info border-0 rounded-5 mt-2 " style="background-color: #00C0B5;"><span class="p-2 text-light fw-bold px-3">Edit</span></button>
            </form>
        </div>
    </section>
    </body>