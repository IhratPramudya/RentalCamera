<div class="container">
  <div style="height: 150px;"></div>
  <div class="card">
    <card class="card-header">
      Form Rental kamera
    </card> 
    <div class="card-body">
      <?php foreach($detail as $dt): ?>
      <form action="<?= base_url('customer/rental/tambah_rental_aksi') ?>" method="post">
        <div class="form-group">
          <label for="">Harga Sewa/hari</label>
          <input type="hidden" name="id_kamera" value="<?= $dt->id_kamera; ?>">
          <input type="number" name="harga" class="form-control" value="<?= $dt->harga; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="">Denda/hari</label>
          <input type="number" name="denda" class="form-control" value="<?= $dt->denda; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="">Tanggal Rental</label>
          <input type="date" name="tanggal_rental" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Tanggal Kembali</label>
          <input type="date" name="tanggal_kembali" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Rental</button>
      </form>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div style="height: 180px;"></div>