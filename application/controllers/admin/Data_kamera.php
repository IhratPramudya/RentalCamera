<?php

class Data_kamera extends CI_Controller{
    public function index(){
        $data['kamera'] = $this->rental_model->get_data('kamera')->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_kamera',$data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_kamera(){
        $data['kamera'] = $this->rental_model->get_data('kamera')->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambah_kamera',$data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_kamera_aksi(){
        $this-> _rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_kamera();
        }else{
            $kode_type          = $this->input->post('kode_type');
            $merk          = $this->input->post('merk');
            $no_kamera          = $this->input->post('no_kamera');
            $warna        = $this->input->post('warna');
            $tahun           = $this->input->post('tahun');
            $status          = $this->input->post('status');        
            $harga          = $this->input->post('harga');
            $denda          = $this->input->post('denda');
            $gambar          = $_FILES['gambar']['name'];
            if($gambar=''){}else{
                $config ['upload_path']  ='./assets/upload';
                $config ['allowed_types']  ='jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar Kamera Gagal Di upload";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }
            $data = array(
                'kode_type' => $kode_type,
                'merk'      => $merk,
                'no_kamera' => $no_kamera,
                'warna'     => $warna,
                'tahun'     => $tahun,
                'status'    => $status,
                'harga'     => $harga,
                'denda'     => $denda,
                'gambar'    => $gambar
            );

            $this->rental_model->insert_data($data,'kamera');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil DI TambahKan!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_kamera');
        }
    }
 
    public function update_kamera($id){
        $where = array('id_kamera' => $id);
        $data['kamera'] = $this->db->query("SELECT * FROM kamera camera, type tp WHERE camera.kode_type=tp.kode_type AND camera.id_kamera='$id'")->result();
        $data['type'] = $this->rental_model->get_data('type')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/update_kamera',$data);
        $this->load->view('templates_admin/footer');

    }
    public function update_kamera_aksi(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE){
            $this->update_kamera();
        }else{
            $id                 = $this->input->post('id_kamera');
            $kode_type          = $this->input->post('kode_type');
            $merk               = $this->input->post('merk');
            $no_kamera          = $this->input->post('no_kamera');
            $warna              = $this->input->post('warna');
            $tahun              = $this->input->post('tahun');
            $status             = $this->input->post('status');
            $harga          = $this->input->post('harga');
            $denda          = $this->input->post('denda');
            $gambar             = $_FILES['gambar']['name'];
            if($gambar){
                $config ['upload_path']  ='./assets/upload';
                $config ['allowed_types']  ='jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
               if($this->upload->do_upload('gambar')){
                   $gambar=$this->upload->data('file_name');
                   $this->db->set('gambar',$gambar);
               }else{
                   echo $this->upload->display_errors();
               }
            }
            $data = array(
                'kode_type' => $kode_type,
                'merk'      => $merk,
                'no_kamera' => $no_kamera,
                'warna'     => $warna,
                'tahun'     => $tahun,
                'status'    => $status,
                'harga'     => $harga,
                'denda'     => $denda
            );
            $where = array(
                'id_kamera' => $id
            );
            $this->rental_model->update_data('kamera',$data,$where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kamera Berhasil Di update !!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_kamera');
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('kode_type','Kode_type','required');
        $this->form_validation->set_rules('merk','Merk','required');
        $this->form_validation->set_rules('no_kamera','No Kamera','required');
        $this->form_validation->set_rules('warna','Warna','required');  
        $this->form_validation->set_rules('tahun','Tahun','required');
        $this->form_validation->set_rules('status','Status','required');
        $this->form_validation->set_rules('harga','Harga','required');
        $this->form_validation->set_rules('denda','Denda','required');
    }

    public function detail_kamera($id){
        $data['detail'] = $this->rental_model->ambil_id_kamera($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_kamera',$data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_kamera($id){
        $where = array('id_kamera' => $id);
        $this->rental_model->delete_data($where,'kamera');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Kamera Berhasil Di Hapus!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/data_kamera');

    }

}

?>