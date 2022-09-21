<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Tambah Type Mobil</h1>
        </div>

    </div>
    <form action="<?php echo base_url('admin/data_type/tambah_type_aksi')?>" method="post">

    <div class="form-group">
        <label for="kode_type">Kode Type</label>
        <input type="text" name="kode_type" id="kode_type" class="form-control">
        <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>')?>
    </div>

    <div class="form-group">
        <label for="nama_type">Nama Type</label>
        <input type="text" name="nama_type" id="nama_type" class="form-control">
        <?php echo form_error('nama_type','<div class="text-small text-danger">','</div>')?>
    </div>

    <button class="btn btn-primary" type="submit">Simpan</button>
    <button class="btn btn-danger" type="reset">reset</button>

    </form>
</div>