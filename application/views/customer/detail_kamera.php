<div class="container">

<div class="card">
    <div class="card-body">
        <?php foreach($detail as $dt) :?>
            <div class="row mb-5">
                <div class="col-md-6">
                    <img class="h-100" width="400px" src="<?php echo base_url('assets/upload/'.$dt->gambar)?>">
                </div>

                <div class="col-md-6">
                    <table class="table table-striped table-bordered" >
                        <tr>
                            <th>
                                Merk
                            </th>
                            <td>
                                <?php echo $dt->merk?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                No Kamera
                            </th>
                            <td>
                                <?php echo $dt->no_kamera?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                Warna
                            </th>
                            <td>
                                <?php echo $dt->warna?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                Tahun
                            </th>
                            <td>
                                <?php echo $dt->tahun?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                Status
                            </th>
                            <td>
                                <?php if($dt->status == '0'){
                                    echo '<span class="text-danger">Tidak Tersedia</span>';
                                }elseif($dt->status == '1'){
                                    echo '<span class="text-info">Tersedia</span>';
                                }
                                
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <?php if($dt->status == '0') {
                                    echo '<span class="btn btn-danger" disable>Telah di sewa</span>';
                                }elseif($dt->status == '1'){
                                    echo anchor('customer/rental/tambah_rental'.$dt->id_kamera, '<button class="btn btn-success bg-red">Rental</button>') ;
                                }
                                ?>
                                </td>
                        </tr>


                        
                    </table>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
</div>