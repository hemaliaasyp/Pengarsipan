<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instansi extends CI_Controller
{

    public function index()
    {
        $data['title'] =  'Halaman Data instansi';
        $data['instansi'] =  $this->M_instansi->getall();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_instansi/v_instansi', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $data['title'] =  'Halaman Tambah instansi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_instansi/v_tambahinstansi');
        $this->load->view('templates/footer');
    }
    public function proses_tambah_data()
    {
        $this->M_instansi->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
       Data Berhasil Ditambahkan Bro!
      </div>');
        redirect('instansi');
    }
    public function hapus_data($id)
    {
        $this->M_instansi->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Dihapus Bro!
       </div>');
        redirect('instansi');
    }
    public function edit_data($id)
    {
        $data['title'] =  'Halaman Edit instansi';
        $data['instansi'] = $this->M_instansi->ambilId($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_instansi/v_editinstansi', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data($id)
    {
        $this->M_instansi->proses_edit_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Diedit Bro!
       </div>');
        redirect('instansi');
    }
}
