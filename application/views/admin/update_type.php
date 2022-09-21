<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Update Type Kamera</h1>
        </div>

    </div>
    <?php foreach($type as $tp) :?>
    <form action="<?php echo base_url('admin/data_type/tambah_type_aksi')?>" method="post">

    <div class="form-group">
        <label for="kode_type"></label>
        <input type="hidden" id="kode_type" value="<?php echo $tp->id_type ?>">
        <input type="text" name="kode_type" id="kode_type" class="form-control" value="<?php echo $tp->id_type ?>">
        <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>')?>
    </div>

    <div class="form-group">
        <label for="nama_type"></label>
        <input type="text" name="nama_type" id="nama_type" class="form-control"  value="<?php echo $tp->nama_type ?>">
        <?php echo form_error('nama_type','<div class="text-small text-danger">','</div>')?>
    </div>

    <button class="btn btn-primary" type="submit">Simpan</button>
    <button class="btn btn-danger" type="reset">reset</button>

    </form>
    <?php endforeach;?>
</div>