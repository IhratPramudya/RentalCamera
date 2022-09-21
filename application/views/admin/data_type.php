<div class="main-content" >
    <div class="section">
        <div class="section-header" style="background-color: SteelBlue;">
            <h1>Type Product</h1>
        </div>

    </div>
    <a href="<?php echo base_url('admin/data_type/tambah_type')?>" class="btn btn-info mb-3">Tambah Type</a>
    <?php echo $this->session->flashdata('pesan')?>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th width="20px">No</th>
                <th>Kode Type</th>
                <th>Nama Type</th>
                <th width="180px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no =1;
            foreach($type as $tp )     :    ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $tp->kode_type?></td>
                    <td><?php echo $tp->nama_type?></td>
                    <td>
                        <a href="<?php echo base_url('admin/data_type/update_type/').$tp->id_type?>" class="btn float-left mr-1 btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo base_url('admin/data_type/delete_type/').$tp->id_type?>" class="btn float-left mr-1 btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>