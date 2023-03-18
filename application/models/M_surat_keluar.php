<?php
class M_surat_keluar extends CI_Model
{

    //fetch all pictures from db
    public function getall()
    {
        return $this->db->get('surat_keluar')->result_array();
    }
    //save picture data to db
    public function proses_tambah_data()
    {
        $data = [
            "nama_surat_keluar" => $this->input->post('nama_surat_keluar'),
            "keterangan" => $this->input->post('keterangan'),
            "harga" => $this->input->post('harga'),
        ];
        $this->db->insert('surat_keluar', $data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id_surat_keluar', $id);
        $this->db->delete('surat_keluar');
    }
    public function ambilId($id)
    {
        return $this->db->get_where('surat_keluar', ['id_surat_keluar' => $id])->row_array();
    }
    public function proses_edit_data()
    {
        $data = [
            "nama_surat_keluar" => $this->input->post('nama_surat_keluar'),
            "keterangan" => $this->input->post('keterangan'),
            "harga" => $this->input->post('harga'),
        ];
        $this->db->where('id_surat_keluar', $this->input->post('id_surat_keluar'));
        $this->db->update('surat_keluar', $data);
    }
}
