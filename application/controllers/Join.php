<?php
class Join extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Join_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Join';
        $data['anggota'] = $this->Join_model->getAllAnggota();
        $data['simpanan'] = $this->Join_model->getAllSimpanan();
        $data['join_table'] = $this->Join_model->join()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('Join/index', $data);
        $this->load->view('templates/footer');
    }
}
