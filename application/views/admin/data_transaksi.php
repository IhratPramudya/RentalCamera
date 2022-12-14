<div class="main-content" >
  <section class="section">
    <div class="section-header" style="background-color: SteelBlue;">
      <h1>Data Transaksi</h1>
    </div>
    <?php echo $this->session->flashdata('pesan')?>
    <table class="table table-responsive table-bordered table-striped">
      <tr>
        <th>No</th>
        <th>Customer</th>
        <th>Kamera</th>
        <th>Tgl. Rental</th>
        <th>Tgl. Kembali</th>
        <th>Harga/Hari</th>
        <th>Denda/Hari</th>
        <th>Total Denda</th>
        <th>Tanggal Dikembalikan</th>
        <th>Status</th>
        <th>Status Rental</th>
        <th>Cek Pembayaran</th>
        <th>Action</th>

      </tr>

      <?php 
      $no = 1;
      foreach($transaksi as $tr): ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $tr->nama; ?></td>
        <td><?= $tr->merk; ?></td>
        <td><?= date('d/m/Y', strtotime($tr->tanggal_rental)); ?></td>
        <td><?= date('d/m/Y', strtotime($tr->tanggal_kembali)); ?></td>
        <td>Rp.<?= number_format($tr->harga, 0,',','.'); ?>,-</td>
        <td>Rp.<?= number_format($tr->denda, 0,',','.'); ?>,-</td>
        <td>Rp.<?= number_format($tr->total_denda, 0,',','.'); ?>,-</td>
        <td>
          <?php if($tr->tanggal_pengembalian == "0000-00-00"){
            echo "-";
          }else{
            echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
          } ?>
        </td>

        <td>
          <?php if(empty($tr->status == "1")){
            echo "Kembali";
          }else{
            echo "Belum Kembali";
          }?>
        </td>


        <td>
          <?php if($tr->status == "1"){
            echo "Belum Selesai";
          }else{
            echo "Selesai";
          }?>
        </td>
        <td>
            <center>
              <?php if ($tr->status_pembayaran = 0) {?>
                  <button class="btn btn-sm btn-danger" ><i class="fas fa-times-circle"></i></button>
                <?php } else{?>
                    <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/'.$tr->id_rental)?>"><i class="fas fa-check-circle"></i></a>
                  <?php } ?>
            </center>
        </td>
<!-- action -->
        <td>
          <?php
          if($tr->status == "1"){
              echo "-";
          } else {?>

            <div class="row">
                <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$tr->id_rental)?>"><i class="fas fa-check mr-2"></i></a>
                <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal'.$tr->id_rental)?>"><i class="fas fa-times"></i></a>
            </div>

          <?php }?>
        </td>
      </tr>

      <?php endforeach; ?>
    </table>
  </section>
</div>