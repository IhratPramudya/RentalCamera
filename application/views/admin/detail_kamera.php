

      <!-- Main Content -->
      <div class="main-content" style="background-color: SteelBlue;">
        <section class="section">
          <div class="section-header">
            <h1>Detail Kamera</h1>
          </div>
          </section>
           <?php foreach($detail as $dt) :?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img width="400px" src="<?php echo base_url().'assets/upload/'.$dt->gambar?>">
                        </div>

                        <div class="col-md-7">
                            <table class="table">
                            <tr>
                                <td>Type Kamera</td>
                                <td>
                                    <?php 
                                    
                                    if($dt->kode_type == 'T1'){
                                        echo '<span class="text-info">Tripod</span>';
                                    }elseif($dt->kode_type == 'A1'){
                                        echo '<span class="text-info">Action Cam</span>';
                                    }elseif($dt->kode_type == 'L1'){
                                        echo '<span class="text-info">Lensa Kamera</span>';
                                    }elseif($dt->kode_type == 'K1'){
                                        echo '<span class="text-info">Kamera</span>';
                                    }elseif($dt->kode_type == 'LT5'){
                                        echo '<span class="text-info">Lighting</span>';
                                    }elseif($dt->kode_type == 'S1'){
                                        echo '<span class="text-info">Stabilizer</span>';
                                    }else{
                                        echo '<span class="text-danger">Type Kamera Belum Tersedia</span>';
                                    }
                                        
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><?php echo $dt->merk?></td>
                            </tr>
                            <tr>
                                <td>No Kamera</td>
                                <td><?php echo $dt->no_kamera?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?php echo $dt->warna?></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><?php echo $dt->tahun?></td>
                            </tr>
                            <tr>
                                <td>status</td>
                                <td><?php if($dt->status == '0'){
                                    echo 'Tidak Tersedia';
                                }elseif($dt->status == '1'){
                                    echo 'Tersedia';
                                }?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>Rp <?php echo number_format($dt->harga,0,',','.')?></td>
                            </tr>
                            <tr>
                                <td>denda</td>
                                <td>Rp <?php echo number_format($dt->denda,0,',','.')?></td>
                            </tr>
                            </table>
                            <a href="<?php echo base_url('admin/data_kamera')?>" class="btn btn-danger mr-2"><i class="fas fa-undo"></i>kembali</a>
                            <a href="<?php echo base_url('admin/data_kamera/update_kamera/'.$dt->id_kamera)?>" class="btn btn-primary"><i class="far fa-edit"></i>update</a>
                        </div>
                  
                    </div>
                </div>
            </div>
            <?php endforeach;?>
      </div>