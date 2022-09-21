
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/assets_shop')?>/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/assets_shop/')?>css/styles.css" rel="stylesheet" />
        <style>
            .carousel-inner img{
                width: 100%;
                height: 550px;
                background-size: cover;
            }
        </style>
    </head>

    
        
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo base_url('customer/dashboard')?>">ThreeEND</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('register')?>">registrasi</a></li>
                    
                    </ul>
                    <form class="d-flex">
                    <a class="nav-link active btn btn-outline-dark" aria-current="page" href="<?php echo base_url('customer/transaksi')?>">
                            <i class="bi-cart-fill me-1"></i>
                            Transaksi
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                            </a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        

                        <li class="nav-item row ml-2"></li>
                            <?php if ($this->session->userdata('nama')){?>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('auth/logout')?>"> <span class="btn btn-warning btn-sm">Logout</span></a></li>
                                <li class="nav-item">
                                    <span class="nav-link" style="background: #fff; border-radius: 10px;"> Welcome <?php echo $this->session->userdata('nama')?> </span>
                                </li>

                            <?php }else {?>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/login')?>"> <span class="btn btn-sm btn-success">login</span> </a></li>
                                <?php }?>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>

        