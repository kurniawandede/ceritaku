
    <section class="row align-items-center justify-content-center" style="height: 100vh;background-color:#ffffff;">
        
        <div class="col-md-4 offset-2 mx-auto">
            <h3 class="opacity-25">Kelompok 4 : Dede Kurniawan, Fadly Abay, Agung Bachri, M Rizqy</h3>
            <h1> Ayo membaca, <br> dan ceritakan pengalamanmu <br> dan sebarkan ceritamu.</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est ut optio a nesciunt! Vitae exercitationem fugit quo modi aspernatur ad, nulla voluptatem nisi, quisquam ipsa in itaque id eum at optio beatae omnis quibusdam officiis?</p>
            <a href="<?php echo base_url(); ?>cerita"><button class="btn btn-info border-0 rounded-1 shake" style="background-color: #E8A729; box-shadow: 4px 10px 68px 4px rgba(232,167,41,0.6); "><span class="text-light fw-bold p-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book m-1 text-light" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg> Ayo Membaca</span></button></a>
              <?php if ($this->session->userdata('logged_in')) { ?>
                <a href="<?php echo base_url(); ?>profile/publis"><button class="btn btn-info border-0 rounded-1 mx-3 shake" style="background-color: #078B84; box-shadow: 9px 10px 44px 4px rgba(7,139,132,0.6);;"><span class="text-light fw-bold p-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square m-1 text-light" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>Ayo Menulis</span></button></a>
              <?php } else { ?>
                <a href="<?php echo base_url(); ?>user/register"><button class="btn btn-info border-0 rounded-1 mx-3 shake" style="background-color: #078B84; box-shadow: 9px 10px 44px 4px rgba(7,139,132,0.6);;"><span class="text-light fw-bold p-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square m-1 text-light" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>Ayo Menulis</span></button></a>
              <?php } ?>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <div>
                <img src="<?php echo base_url('assets/img/img-index.png'); ?>" alt="" height="80%" width="80%" class="img-fluid">
            </div>
        </div>
    </section>