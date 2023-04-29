<?php
class model_kec extends CI_Model
{

    function tampilkan_data()
    {
        return $this->db->get('tb_kec');
    }

    function tambah()
    {
        $data = array(
            'nama_kec' => $this->input->post('nama_kec'));
        $this->db->insert('tb_kec', $data);
    }

    function edit()
    {
        $id = $this->input->post('id_kec');
        $data = array('nama_kec' => $this->input->post('nama_kec'));
        $this->db->where('id_kec', $id);
        $this->db->update('tb_kec', $data);
    }

    function get_one($id)
    {
        $indeks =  array('id_kec' => $id);
        return $this->db->get_where('tb_kec', $indeks);
    }

    function delete($id)
    {
        $this->db->where('id_kec', $id);
        $this->db->delete('tb_kec');
    }
    function tampilkan_data_paging($halaman, $batas)
    {
        return $this->db->query("select * from tb_kec limit $halaman,$batas");
    }
    function cari()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('nama_kec','$keyword');
        return $this->db->get('tb_kec')->result_array();
    }
}