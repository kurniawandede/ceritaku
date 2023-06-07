<style>
        .nav-item a[href="<?php echo base_url(); ?>profile"] {
        text-decoration: underline;
        text-decoration-color: #00C0B5;
        text-decoration-thickness: 7px;
        text-underline-offset: 18px;
        }
    </style>
<section>
    <div class="container mt-5 p-5">
        <div class="row">
            <div class="col-md-3 d-flex flex-column align-items-center">
                <!-- <img src="assets/img/default.png" class="img-fluid img-thumbnail" 
                style="border-radius: 50%;width: 300px;height: 300px;object-fit: cover;" alt=""> -->
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
                        <a href="<?php echo base_url('profile/edit/'.$this->session->userdata('id_user')); ?>">
                            <button type="button" class="btn btn-info border-0 rounded-5" style="background-color: #00C0B5;">
                                <span class="p-1 text-light fw-bold px-1">Edit Profiles</span>
                            </button>
                        </a>
                    </div>
                </div>
                <?php if ($this->session->userdata('logged_in')) { ?>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nama</label>
                    <input disabled type="text" id="disabledTextInput" class="form-control" value="<?php echo $this->session->userdata('fullname'); ?>">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Email</label>
                    <input disabled type="text" id="disabledTextInput" class="form-control" value="<?php echo $this->session->userdata('email'); ?>">
                </div>

                <?php } else { ?>
                    <a href="<?php echo base_url(); ?>user/login" class="px-3">
                        <button type="button" class="btn btn-info border-0 rounded-5" style="background-color: #00C0B5;">
                            <span class="p-2 text-light fw-bold px-3">Login</span>
                        </button>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
