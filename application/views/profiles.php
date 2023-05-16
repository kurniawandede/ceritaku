<style>
        .nav-item a[href="<?php echo base_url(); ?>profile"] {
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
            <div class="row">
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <img src="assets/img/default.png" class="img-fluid img-thumbnail" 
                    style="border-radius: 50%;width: 300px;height: 300px;object-fit: cover;" alt="">
                    <button disabled type="button" class="btn btn-info border-0 rounded-5 mt-4 bg-secondary">
                        <span class="p-2 text-light fw-bold">
                            <?php 
                                $role = $this->session->userdata('role');
                                if($role == 1) {
                                    echo 'Admin';
                                } else if($role == 2) {
                                    echo 'Penulis';
                                } else if($role == 3) {
                                    echo 'Pembaca';
                                }
                            ?>
                        </span>
                    </button>
                </div>
                
                <div class="col-md-5 offset-1">
                    <div class="d-flex justify-content-end">
                        <div class="buttonedit">
                            <a href="login.html"><button type="button" class="btn btn-info border-0 rounded-5" 
                            style="background-color: #00C0B5;"><span 
                            class="p-1 text-light fw-bold px-1">Edit Profiles</span></button></a>
                        </div>
                    </div>
                    <?php if ($this->session->userdata('logged_in')) { ?>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nama</label>
                        <input disabled type="text" id="disabledTextInput" class="form-control" 
                        value="<?php echo $this->session->userdata('fullname'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Email</label>
                        <input disabled type="text" id="disabledTextInput" class="form-control" 
                        value="<?php echo $this->session->userdata('email'); ?>">
                    </div>

                    <?php } else { ?>
                        a href="<?php echo base_url(); ?>user/login" class="px-3"><button type="button" 
                        class="btn btn-info border-0 rounded-5" style="background-color: #00C0B5;">
                        <span class="p-2 text-light fw-bold px-3">Login</span></button></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>