
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin-bottom: 300px;">
            
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach($transaksi as $tr) :?>
                            <tr>
                                <th>
                                    Merk Kamera
                                </th>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php echo $tr->merk?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    Tanggal Rental
                                </th>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php echo $tr->tanggal_rental?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    Tanggal Kembali
                                </th>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php echo $tr->tanggal_kembali?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    Biaya Sewa / Hari
                                </th>
                                <td>
                                    :
                                </td>
                                <td>
                                   Rp. <?php echo number_format($tr->harga,0,',','.')?>
                                </td>
                            </tr>


                            <tr>
                                <?php 
                                $x = strtotime($tr->tanggal_kembali);
                                $y = strtotime($tr->tanggal_rental);
                                $jmlHari = abs(($x - $y)/(60*60*24));
                                ?>
                                <th>
                                    Jumalah Hari Sewa
                                </th>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php echo $jmlHari?> Hari
                                </td>
                            </tr>

                            <tr class="text-success">
                                <th>
                                    Jumlah Pembayaran
                                </th>
                                <td>
                                    :
                                </td>
                                <td class="bg-success text-light">
                                   Rp. <?php echo number_format($tr->harga * $jmlHari,0,',','.')?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental)?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                            </tr>


                            <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="margin-bottom: 300px;">

          
                <div class="card-header alert alert-primary" >
                            Informasi Pembayaran
                </div>
                <div class="card-body text-success">
                    <p>Silahkan Melakukan Pembayaran Melalui Nomor Rekening ini:</p>
                </div>
                                    <ul class="list-group">
                    <li class="list-group-item">Bank Jago 97987779877</li>
                    <li class="list-group-item">Bank BRI 098765789098</li>
                    <li class="list-group-item">Bank Mandiri 98765789</li>
                    <li class="list-group-item">Bank BCA 987646756789</li>
                    </ul>

                    <?php if(empty($tr->bukti_pembayaran )) {?>
                  
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Upload Bukti Pembayaran
</button>

                    <?php }  elseif($tr->status_pembayaran == '0') {?>
                        <button style="width: 100%;" class="btn btn-warning"> <i class="fa fa-clock"></i> Menunggu Konfirmasi</button>
                        <?php } elseif($tr->status_pembayaran == '1'){?>
                            <button style="width: 100%;" class="btn btn-success"> <i class="fa fa-check"></i> Pembayaran Selesai</button>
                            <?php } ?>
                        
            </div>
        </div>
    </div>
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo base_url('customer/transaksi/pembayaran_aksi/')?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
         <div class="form-group">
             <label for="">Upload Bukti Pembayaran</label>
             <input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental?>">
             <input type="file" name="bukti_pembayaran" class="form-control">
         </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Kirim</button>
      </div>
    </div>
    </form>
  </div>
</div>