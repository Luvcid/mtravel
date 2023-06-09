<?php
class Testimoni extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mberita');
        $this->load->model('mtestimoni');
    }
    function index(){
        $x['paket']=$this->mberita->paket_footer();
        $x['berita']=$this->mberita->berita_footer();
        $x['photo']=$this->mberita->get_photo();
        $x['test']=$this->mtestimoni->tampil_test();
		$x['brt']=$this->mberita->tampil_berita();
		$this->load->view('front/v_testimoni',$x);
    }
    function simpan(){
        $nama=$this->input->post('nama');
        $email=$this->input->post('email');
        $msg=$this->input->post('message');
        $this->mtestimoni->simpan_testimoni($nama,$email,$msg);
        redirect('testimoni');
    }
}
