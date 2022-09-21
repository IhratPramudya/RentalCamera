

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class=" login-color-bg col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2">
          <div class="p-4 m-3">
            <img src="<?php echo base_url('assets/assets_stisla/assets/img/threeend-01.jpg')?>" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">ThreeEND</span></h4>
            <p class="text-bold">Sebelum anda mau menggunakan layanan kami silahkan Login.....</p>
            <?php echo $this->session->flashdata('pesan');?>
            <div class="card-body">
            <form method="POST" action="<?= base_url('auth/login'); ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
                    <?= form_error('username', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">
                    <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>


              </div>
            <div class="text-center mt-5 text-small">
              Copyright &copy; ThreeEND. Made with 💙 Kelompok 3
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" style="background-image:url(<?php echo base_url('assets/assets_stisla/assets/img/unsplash/login3.jpg')?>);">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Selamat Datang Website ThreeENDD</h1>
                <h5 class="font-weight-normal text-muted-transparent">Bali , Indonesia</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
