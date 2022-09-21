<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Customer</h1>
          </div>


          <form action="<?php echo base_url('admin/data_customer/tambah_customer_aksi')?>" method="post">
        
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" id="nama" name="nama" class="form-control">
              <?php echo form_error('nama','<span class="text-danger text-small">','</span>')?>
          </div>

          <div class="form-group">
              <label for="username">Username</label>
              <input type="username" id="username" name="username" class="form-control">
              <?php echo form_error('username','<span class="text-danger text-small">','</span>')?>
          </div>

          <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" id="alamat" name="alamat" class="form-control">
              <?php echo form_error('alamat','<span class="text-danger text-small">','</span>')?>
          </div>

          <div class="form-group">
              <label for="gender">Jenis Kelamin</label>
              <select name="gender" id="gender" class="form-control">
                  <option value=""></option>
                  <option value="laki-laki">laki-laki</option>
                  <option value="perempuan">perempuan</option>
              </select>
              <?php echo form_error('nama','<span class="text-danger text-small">','</span>')?>
          </div>

          <div class="form-group">
              <label for="no_telepon">NO. Telp</label>
              <input type="text" id="no_telepon" name="no_telepon" class="form-control">
              <?php echo form_error('no_telepon','<span class="text-danger text-small">','</span>')?>
          </div>

          <div class="form-group">
              <label for="no_ktp">NO. KTP</label>
              <input type="text" id="no_ktp" name="no_ktp" class="form-control">
              <?php echo form_error('no_ktp','<span class="text-danger text-small">','</span>')?>
          </div>

          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control">
              <?php echo form_error('password','<span class="text-danger text-small">','</span>')?>
          </div>

          <button type="submit" class="btn btn-primary">simpan</button>
          <button type="reset" class="btn btn-danger">reset</button>
        </form>
        </section>
</div>