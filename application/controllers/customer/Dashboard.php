<?php
 class Dashboard extends CI_controller{
     public function index()
     {
        $data['kamera'] = $this->rental_model->get_data('kamera')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboard',$data);
        $this->load->view('templates_customer/footer');
     }

     public function detail_kamera($id)
     {
        $data['detail'] = $this->rental_model->ambil_id_kamera($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/detail_kamera',$data);
        $this->load->view('templates_customer/footer');
     }
 }

?>