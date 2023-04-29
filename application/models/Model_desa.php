<?php
class model_desa extends CI_Model
{

    function tampilkan_data()
    {
        $query = "SELECT * FROM tb_desa as td, tb_kec as tk
        WHERE tk.id_kec = td.id_kec";
        return $this->db->query($query);
    }

    function tambah()
    {
        $data = array(
            'nama_desa' => $this->input->post('nama_desa'),
            'id_kec' => $this->input->post('id_kec')
        );
        $this->db->insert('tb_desa', $data);
    }

    function edit()
    {
        $id = $this->input->post('id_desa');
        $data = array(
            'nama_desa' => $this->input->post('nama_desa'),
            'id_kec' => $this->input->post('id_kec'),
        );
        $this->db->where('id_desa', $id);
        $this->db->update('tb_desa', $data);
    }

    function get_one($id)
    {
        $indeks = array('id_desa' => $id);
        return $this->db->get_where('tb_desa', $indeks);
    }

    function delete($id)
    {
        $this->db->where('id_desa', $id);
        $this->db->delete('tb_desa');
    }

    function ambilDataRekap($t_tahun)
    {

        $query = "SELECT nama_desa, id_kec FROM tb_desa WHERE nama_desa LIKE '$t_tahun'";
        return $this->db->query($query);
    }

    function tampilkan_data_paging($halaman, $batas)
    {
        $query = " SELECT *
                FROM tb_desa AS td,tb_kec AS tk
                WHERE td.id_kec=tk.id_kec limit $halaman,$batas";
        return $this->db->query($query);
    }

    function cari()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('nama_desa','$keyword');
        return $this->db->get('tb_desa')->result_array();
    }
}
