

      <!-- Main Content -->
      <div class="main-content" >
        <section class="section" >
          <div class="section-header" style="background-color: SteelBlue;">
            <h1>Data Barang</h1>
          </div>
          <a href="<?php echo base_url('admin/data_kamera/tambah_kamera')?>" class="btn btn-info mb-3">Tambah Data</a>

     
           <table class="table table-hover table-striped table-borderd">
           <?php echo $this->session->flashdata('pesan')?>
            <thead>
              <tr>
                  <th>No</th> 
                  <th>Gambar</th>
                  <th>Type</th>
                  <th>Merk</th>
                  <th>NO Kamera</th>
                  <th>Status</th>
                  <th>Aksi</th>
             </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($kamera as $camera) :?>
                <tr>
                <td><?php echo $no++?></td>
                  <td>
                    <img width="30px" src="<?php echo base_url().'assets/upload/'.$camera->gambar?>" >
                  </td>
                <td><?php echo $camera->kode_type?></td>
                <td><?php echo $camera->merk?></td>
                <td><?php echo $camera->no_kamera?></td>
                <td><?php
                  if ($camera->status == 1) {
                    echo "<span class='badge badge-info'>Tersedia</span>";
                  }elseif ($camera->status == 0){
                    echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                  }
                  ?></td>
            
                <td><a href="<?php echo base_url('admin/data_kamera/detail_kamera/').$camera->id_kamera?>" class="btn float-left mr-1 btn-sm btn-success"><i class="fas fa-eye"></i></a>
                <a href="<?php echo base_url('admin/data_kamera/delete_kamera/').$camera->id_kamera?>" class="btn  btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                <a href="<?php echo base_url('admin/data_kamera/update_kamera/').$camera->id_kamera?>" class="btn btn-sm btn-prima"><i class="fas fa-edit"></i></a></td>
                </tr>
                <?php endforeach;?>
              </tbody>

          </table>
        </section>
      </div>