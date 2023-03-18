<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{

    public function index()
    {
        $data['title'] =  'Halaman Data perusahaan';
        $data['perusahaan'] =  $this->M_perusahaan->getall();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_perusahaan/v_perusahaan', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $data['title'] =  'Halaman Tambah perusahaan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_perusahaan/v_tambahperusahaan');
        $this->load->view('templates/footer');
    }
    public function proses_tambah_data()
    {
        $this->M_perusahaan->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
       Data Berhasil Ditambahkan Bro!
      </div>');
        redirect('perusahaan');
    }
    public function hapus_data($id)
    {
        $this->M_perusahaan->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Dihapus Bro!
       </div>');
        redirect('perusahaan');
    }
    public function edit_data($id)
    {
        $data['title'] =  'Halaman Edit perusahaan';
        $data['perusahaan'] = $this->M_perusahaan->ambilId($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_perusahaan/v_editperusahaan', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data($id)
    {
        $this->M_perusahaan->proses_edit_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Diedit Bro!
       </div>');
        redirect('perusahaan');
    }
}
