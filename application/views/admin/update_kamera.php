

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>update Data Kamera</h1>
          </div>
          <div class="card">
            <div class="card-body">
              <?php foreach ($kamera as $camera) :?>

              <form action="<?php echo base_url('admin/data_kamera/update_kamera_aksi')?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputKode">Type Kamera</label>
                            <input type="hidden" name="id_kamera" value="<?php echo $camera->id_kamera?>">
                            <select id="inputKode" name="kode_type"class="form-control">
                                <option value="<?php echo $camera->kode_type?>"><?php echo $camera->kode_type?></option>
                              <?php foreach($type as $tp) :?>
                                <option value="<?php echo $tp->kode_type?>"><?php echo $tp->kode_type?></option>
                                  <?php endforeach;?>

                              </select>
                              <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>')?>
                          </div>
                          

                      <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" class="form-control" name="merk" value="<?php echo $camera->merk?>" id="merk" placeholder="Masukkan Data">
                        <?php echo form_error('merk','<div class="text-small text-danger">','</div>')?>
                      </div>

                      <div class="form-group">
                        <label for="no_kamera">No Kamera</label>
                        <input type="text" class="form-control" name="no_kamera" value="<?php echo $camera->no_kamera?>"  id="no_kamera" placeholder="Masukkan Data">
                        <?php echo form_error('no_kamera','<div class="text-small text-danger">','</div>')?>
                      </div>

                      <div class="form-group">
                        <label for="warna">Warna</label>
                        <input type="text" class="form-control" name="warna" value="<?php echo $camera->warna?>"  id="warna" placeholder="Masukkan Data">
                        <?php echo form_error('warna','<div class="text-small text-danger">','</div>')?>
                      </div>
                </div>
                <div class="col-md-6">
                      <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" name="tahun" value="<?php echo $camera->tahun?>"  id="tahun" placeholder="Masukkan Data">
                        <?php echo form_error('tahun','<div class="text-small text-danger">','</div>')?>
                      </div>

                      <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status"class="form-control">
                        <option <?php if($camera->status == "1"){ echo "selected='selected'";}
                            echo $camera->status;
                        ?> value="1">Tersedia</option>
                         <option <?php if($camera->status == "0"){ echo "selected='selected'";}
                            echo $camera->status;
                        ?> value="0">Tidak Tersedia</option>
                        </select>
                        <?php echo form_error('status','<div class="text-small text-danger">','</div>')?>
                      </div>
                      
                      <div class="form-group">
                        <label for="harga">Harga/hari</label>
                        <input type="number" class="form-control-file"  name="harga" id="gambar">
                        <?php echo form_error('gambar','<div class="text-small text-danger">','</div>')?>
                      </div>


                      <div class="form-group">
                        <label for="denda">Denda</label>
                        <input type="number" class="form-control-file"  name="denda" id="denda">
                        <?php echo form_error('gambar','<div class="text-small text-danger">','</div>')?>
                      </div>


                      <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file"  name="gambar" id="gambar">
                        <?php echo form_error('gambar','<div class="text-small text-danger">','</div>')?>
                      </div>
                        
                              

    
                      <button type="submit" class="btn btn-primary mt-4 mr-2">Simpan</button>
                      <button type="reset" class="btn btn-danger mt-4">Reset</button>
                  </div>
              </div>
            </form>
            <?php endforeach;?>
            </div>
          </div>
        </section>
      </div>
      
  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>


  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/assets_stisla')?>/assets/js/scripts.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla')?>/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/assets_stisla')?>/assets/js/page/index-0.js"></script>
</body>
</html>
