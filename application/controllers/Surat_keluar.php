<?php
defined('BASEPATH') or exit('No direct script access allowed');

class surat_keluar extends CI_Controller
{

    public function index()
    {

        $data['title'] =  'Halaman Data Surat Keluar';
        $data['surat_keluar'] =  $this->M_surat_keluar->getall();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_surat_keluar/v_surat_keluar', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $data['title'] =  'Halaman Tambah Surat Keluar';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_surat_keluar/v_tambahsurat_keluar');
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
            $nama_surat_keluar = $this->input->post('nama_surat_keluar', TRUE);
            $nama_perusahaan = $this->input->post('nama_perusahaan', TRUE);
            $nama_instansi = $this->input->post('nama_instansi', TRUE);
            $perihal = $this->input->post('perihal', TRUE);
            $no_surat_keluar = $this->input->post('no_surat_keluar', TRUE);
            $tanggal_surat = $this->input->post('tanggal_surat', TRUE);

            $data = array(
                'nama_surat_keluar' => $nama_surat_keluar,
                'nama_perusahaan' => $nama_perusahaan,
                'nama_instansi' => $nama_instansi,
                'perihal' => $perihal,
                'no_surat_keluar' => $no_surat_keluar,
                'tanggal_surat' => $tanggal_surat,
                'file' => $file,
            );
            $this->db->insert('surat_keluar', $data);
            // var_dump($data);
            // die;
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data Berhasil Ditambahkan Bro!
           </div>');
            redirect('surat_keluar');
        }
    }

    public function hapus_data($id)
    {
        $this->M_surat_keluar->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Dihapus Bro!
       </div>');
        redirect('surat_keluar');
    }
    public function edit_data($id)
    {
        $data['title'] =  'Halaman Edit surat_keluar';
        $data['surat_keluar'] = $this->M_surat_keluar->ambilId($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('V_surat_keluar/v_editsurat_keluar', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data($id)
    {
        $id = $this->input->post('id_surat_keluar');
        $config['upload_path']   = './gambar/';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['max_size']      = 10000;
        $config['max_width']     = 10000;
        $config['max_height']    = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            $nama_surat_keluar = $this->input->post('nama_surat_keluar', TRUE);
            $nama_perusahaan = $this->input->post('nama_perusahaan', TRUE);
            $nama_instansi = $this->input->post('nama_instansi', TRUE);
            $perihal = $this->input->post('perihal', TRUE);
            $no_surat_keluar = $this->input->post('no_surat_keluar', TRUE);
            $tanggal_surat = $this->input->post('tanggal_surat', TRUE);

            $data = array(
                'nama_surat_keluar' => $nama_surat_keluar,
                'nama_perusahaan' => $nama_perusahaan,
                'nama_instansi' => $nama_instansi,
                'perihal' => $perihal,
                'no_surat_keluar' => $no_surat_keluar,
                'tanggal_surat' => $tanggal_surat,
                'file' => $file,
            );
            $this->db->where('id_surat_keluar', $id);
            $this->db->update('surat_keluar', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data Berhasil Diubah Bro!
           </div>');
            redirect('surat_keluar');
        } else {
            $file = $this->upload->data();
            $file = $file['file_name'];
            $nama_surat_keluar = $this->input->post('nama_surat_keluar', TRUE);
            $nama_perusahaan = $this->input->post('nama_perusahaan', TRUE);
            $nama_instansi = $this->input->post('nama_instansi', TRUE);
            $perihal = $this->input->post('perihal', TRUE);
            $no_surat_keluar = $this->input->post('no_surat_keluar', TRUE);
            $tanggal_surat = $this->input->post('tanggal_surat', TRUE);

            $data = array(
                'nama_surat_keluar' => $nama_surat_keluar,
                'nama_perusahaan' => $nama_perusahaan,
                'nama_instansi' => $nama_instansi,
                'perihal' => $perihal,
                'no_surat_keluar' => $no_surat_keluar,
                'tanggal_surat' => $tanggal_surat,
                'file' => $file,
            );
            $this->db->where('id_surat_keluar', $id);
            $this->db->update('surat_keluar', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data Berhasil Diubah Bro!
           </div>');
            redirect('surat_keluar');
        }
    }
}
