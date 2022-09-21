
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/assets_shop')?>/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/assets_shop/')?>css/styles.css" rel="stylesheet" />
        <style>
            .carousel-inner img{
                width: 100%;
                height: 500px;
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo base_url('register')?>">Registrasi</a></li>
                        
                    
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
                                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('auth/logout')?>"><span class="btn btn-warning btn-sm">Logout</span></a></li>
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

        <!-- Header-->
        <header class="bg-dark py-5 container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo base_url('assets/assets_stisla/assets/img/LOG-01.jpg')?>" class="d-block"  alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo base_url('assets/assets_stisla/assets/img/log2.jpg')?>" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo base_url('assets/assets_stisla/assets/img/log3.jpg')?>" class="d-block w-100" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </header>