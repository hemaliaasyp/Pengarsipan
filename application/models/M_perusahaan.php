<?php
class M_perusahaan extends CI_Model
{

    //fetch all pictures from db
    public function getall()
    {
        return $this->db->get('surat_perusahaan')->result_array();
    }
    //save picture data to db
    public function proses_tambah_data()
    {
        $data = [
            "nama_perusahaan" => $this->input->post('nama_perusahaan'),
            "kode" => $this->input->post('kode'),


        ];
        $this->db->insert('surat_perusahaan', $data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id_perusahaan', $id);
        $this->db->delete('surat_perusahaan');
    }
    public function ambilId($id)
    {
        return $this->db->get_where('surat_perusahaan', ['id_perusahaan' => $id])->row_array();
    }
    public function proses_edit_data()
    {
        $data = [
            "nama_perusahaan" => $this->input->post('nama_perusahaan'),
            "kode" => $this->input->post('kode'),

        ];
        $this->db->where('id_perusahaan', $this->input->post('id_perusahaan'));
        $this->db->update('surat_perusahaan', $data);
    }
}
