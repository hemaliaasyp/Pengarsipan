<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_masuk extends CI_Controller
{

    public function index()
    {

        $data['title'] =  'Halaman Data Surat Masuk';
        $data['surat_masuk'] =  $this->M_surat_masuk->getall();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_surat_masuk/v_surat_masuk', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $data['title'] =  'Halaman Tambah Surat Masuk';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_surat_masuk/v_tambahsurat_masuk');
        $this->load->view('templates/footer');
    }
    public function proses_tambah_data()
    {
        $config['upload_path']   = './gambar/';
        $config['allowed_types'] = 'png|jpg|jpeg|pdf';
        $config['max_size']      = 10000;
        $config['max_width']     = 10000;
        $config['max_height']    = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Upload";
        } else {
            $file = $this->upload->data();
            $file = $file['file_name'];
            $nama_surat_masuk = $this->input->post('nama_surat_masuk', TRUE);
            $nama_perusahaan = $this->input->post('nama_perusahaan', TRUE);
            $nama_instansi = $this->input->post('nama_instansi', TRUE);
            $perihal = $this->input->post('perihal', TRUE);
            $no_surat_masuk = $this->input->post('no_surat_masuk', TRUE);
            $tanggal_surat = $this->input->post('tanggal_surat', TRUE);

            $data = array(
                'nama_surat_masuk' => $nama_surat_masuk,
                'nama_perusahaan' => $nama_perusahaan,
                'nama_instansi' => $nama_instansi,
                'perihal' => $perihal,
                'no_surat_masuk' => $no_surat_masuk,
                'tanggal_surat' => $tanggal_surat,
                'file' => $file,
            );
            $this->db->insert('surat_masuk', $data);
            // var_dump($data);
            // die;
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data Berhasil Ditambahkan Bro!
           </div>');
            redirect('surat_masuk');
        }
    }

    public function hapus_data($id)
    {
        $this->M_surat_masuk->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Dihapus Bro!
       </div>');
        redirect('surat_masuk');
    }
    public function edit_data($id)
    {
        $data['title'] =  'Halaman Edit surat_masuk';
        $data['surat_masuk'] = $this->M_surat_masuk->ambilId($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_surat_masuk/v_editsurat_masuk', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data($id)
    {
        $id = $this->input->post('id_surat_masuk');
        $config['upload_path']   = './gambar/';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['max_size']      = 10000;
        $config['max_width']     = 10000;
        $config['max_height']    = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            $nama_surat_masuk = $this->input->post('nama_surat_masuk', TRUE);
            $nama_perusahaan = $this->input->post('nama_perusahaan', TRUE);
            $nama_instansi = $this->input->post('nama_instansi', TRUE);
            $perihal = $this->input->post('perihal', TRUE);
            $no_surat_masuk = $this->input->post('no_surat_masuk', TRUE);
            $tanggal_surat = $this->input->post('tanggal_surat', TRUE);

            $data = array(
                'nama_surat_masuk' => $nama_surat_masuk,
                'nama_perusahaan' => $nama_perusahaan,
                'nama_instansi' => $nama_instansi,
                'perihal' => $perihal,
                'no_surat_masuk' => $no_surat_masuk,
                'tanggal_surat' => $tanggal_surat,
                'file' => $file,
            );
            $this->db->where('id_surat_masuk', $id);
            $this->db->update('surat_masuk', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data Berhasil Diubah Bro!
           </div>');
            redirect('surat_masuk');
        } else {
            $file = $this->upload->data();
            $file = $file['file_name'];
            $nama_surat_masuk = $this->input->post('nama_surat_masuk', TRUE);
            $nama_perusahaan = $this->input->post('nama_perusahaan', TRUE);
            $nama_instansi = $this->input->post('nama_instansi', TRUE);
            $perihal = $this->input->post('perihal', TRUE);
            $no_surat_masuk = $this->input->post('no_surat_masuk', TRUE);
            $tanggal_surat = $this->input->post('tanggal_surat', TRUE);

            $data = array(
                'nama_surat_masuk' => $nama_surat_masuk,
                'nama_perusahaan' => $nama_perusahaan,
                'nama_instansi' => $nama_instansi,
                'perihal' => $perihal,
                'no_surat_masuk' => $no_surat_masuk,
                'tanggal_surat' => $tanggal_surat,
                'file' => $file,
            );
            $this->db->where('id_surat_masuk', $id);
            $this->db->update('surat_masuk', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data Berhasil Diubah Bro!
           </div>');
            redirect('surat_masuk');
        }
    }
}
