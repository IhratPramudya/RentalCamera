<div class="main-content" >
        <section class="section">
          <div class="section-header" style="background-color: SteelBlue;">
            <h1>Data customer</h1>
          </div>
          <a href="<?php echo base_url('admin/data_customer/tambah_customer')?>" class="btn btn-info mb-3">Tambah Data</a>




          <table class="table table-striped table-responsive table-bordered" >
          <?php echo $this->session->flashdata('pesan')?>
        <thead>
            <tr>
                <th>
                    NO     
                </th>
                <th>
                    Nama     
                </th>
                <th>
                    Username     
                </th>
                <th>
                    Alamat     
                </th>
                <th>
                    Gender     
                </th>
                <th>
                    NO. Telephone     
                </th>
                <th>
                    NO. KTP     
                </th>
                <th>
                    Password     
                </th>
                <th>
                    Aksi     
                </th>

            </tr>
        </thead>
       <?php
       $no = 1;
        foreach($customer as $cs) :?>
        <tbody>
            <tr>
                <td>
                    <?php echo $no++;?>
                </td>
                <td>
                    <?php echo $cs->nama;?>
                </td>
                <td>
                    <?php echo $cs->username?>
                </td>
                <td>
                    <?php echo $cs->alamat;?>
                </td>
                <td>
                    <?php echo $cs->gender;?>
                </td>
                <td>
                    <?php echo $cs->no_telepon;?>
                </td>
                <td>
                    <?php echo $cs->no_ktp;?>
                </td>
                <td>
                    <?php echo $cs->password;?>
                </td>
                <td>
                   <div class="row justify-content-between">
                   <a class="btn btn-sm  btn-danger" href="<?php echo base_url('admin/data_customer/delete_customer/').$cs->id_customer?>"><i class="fas fa-trash"></i></a>
                    <a class="btn btn-sm  btn-primary" href="<?php echo base_url('admin/data_customer/update_customer/').$cs->id_customer?>"><i class="fas fa-edit"></i></a>
                   </div>
                </td>
            </tr>
        </tbody>
        <?php endforeach;?>

          </table>
        </section>
</div>