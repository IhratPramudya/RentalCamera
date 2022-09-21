
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
            <?php echo $this->session->flashdata('pesan')?>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach($kamera as $camera) :?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href=""><img class="card-img-top" src="<?php echo base_url('assets/upload/').$camera->gambar?>"></a> 
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"> <a class="fw-bolder text-decoration-none" href=""><?php echo $camera->merk?></a> </h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center text-bolder mb-2">
                                      <?php echo $camera->no_kamera?>
                                    </div>
                                    <div class="">
                                    <h5 class="fw-bolder">Rp <a class="fw-bolder text-decoration-none" href=""><?php echo number_format($camera->harga,0,',','.')?></a>/Hari </h5>   
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0">
                                <?php if($camera->status == '0') {
                                    echo '<span class="btn btn-danger" disable>Telah di sewa</span>';
                                }elseif($camera->status == '1'){
                                    echo anchor('customer/rental/tambah_rental/'.$camera->id_kamera, '<button class="btn btn-success bg-red">Rental</button>') ;
                                }
                                ?>
                                <a class="btn btn-warning" href="<?php echo base_url('customer/dashboard/detail_kamera/').$camera->id_kamera?>">Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
 



