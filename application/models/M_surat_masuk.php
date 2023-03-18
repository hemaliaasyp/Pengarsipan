<?php
class M_surat_masuk extends CI_Model
{

    //fetch all pictures from db
    public function getall()
    {
        return $this->db->get('surat_masuk')->result_array();
    }
    //save picture data to db
    public function proses_tambah_data()
    {
        $data = [
            "nama_surat_masuk" => $this->input->post('nama_surat_masuk'),
            "keterangan" => $this->input->post('keterangan'),
            "harga" => $this->input->post('harga'),
        ];
        $this->db->insert('surat_masuk', $data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id_surat_masuk', $id);
        $this->db->delete('surat_masuk');
    }
    public function ambilId($id)
    {
        return $this->db->get_where('surat_masuk', ['id_surat_masuk' => $id])->row_array();
    }
    public function proses_edit_data()
    {
        $data = [
            "nama_surat_masuk" => $this->input->post('nama_surat_masuk'),
            "keterangan" => $this->input->post('keterangan'),
            "harga" => $this->input->post('harga'),
        ];
        $this->db->where('id_surat_masuk', $this->input->post('id_surat_masuk'));
        $this->db->update('surat_masuk', $data);
    }
}
