<?php
class M_instansi extends CI_Model
{

    //fetch all pictures from db
    public function getall()
    {
        return $this->db->get('surat_instansi')->result_array();
    }
    //save picture data to db
    public function proses_tambah_data()
    {
        $data = [
            "nama_instansi" => $this->input->post('nama_instansi'),
            "email_instansi" => $this->input->post('email_instansi'),


        ];
        $this->db->insert('surat_instansi', $data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id_instansi', $id);
        $this->db->delete('surat_instansi');
    }
    public function ambilId($id)
    {
        return $this->db->get_where('surat_instansi', ['id_instansi' => $id])->row_array();
    }
    public function proses_edit_data()
    {
        $data = [
            "nama_instansi" => $this->input->post('nama_instansi'),
            "email_instansi" => $this->input->post('email_instansi'),

        ];
        $this->db->where('id_instansi', $this->input->post('id_instansi'));
        $this->db->update('surat_instansi', $data);
    }
}
