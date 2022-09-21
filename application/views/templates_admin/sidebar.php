
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg" style="background-color: Snow;"></div>
      <nav class="navbar navbar-expand-lg main-navbar navbar-light">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                 
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#"  class="nav-link nav-link-lg nav-link-user">
            
            <div class="d-sm-none d-lg-inline-block" style="color: DarkSlateGrey;">Welcome <?php echo $this->session->userdata('nama')?></div></a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper" style="background-color: MidnightBlue;">
          <div class="sidebar-brand">
            <a href="<?php base_url('admin/dashboard')?>"><span class='text-light'>Three</span><i class="fas fa-video text-light"></i><span class='text-light'>ENDD</span></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php base_url('admin/dashboard')?>"> <span class='text-light'> TE</span></a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link" href="<?php echo base_url('admin/dashboard')?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('admin/data_kamera')?>"><i class="fas fa-camera-retro"></i> <span>Data Barang</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/data_type')?>"><i class="fab fa-accusoft"></i><span>Data Type</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/data_customer')?>"><i class="fas fa-people-carry"></i> <span>Data Customer</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/transaksi')?>"><i class="fas fa-cash-register"></i><span>Transaksi</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/laporan/')?>"><i class="fas fa-calendar-check"></i> <span>Laporan</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('auth/logout')?>"> <span class="btn btn-sm btn-danger"><i class="fas fa-sign-out-alt">Logout</i></span></a></li>




          </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            </div>
        </aside>
      </div>
