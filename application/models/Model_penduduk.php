<?php
class model_penduduk extends CI_Model
{

    function tampilkan_data()
    {
        return $this->db->get('tb_penduduk');
    }

    function tambah(){
        $data=array (
           'nama_penduduk'=>$this->input->post('nama_penduduk'),
           'no_kk'=>$this->input->post('no_kk'),
           'nik'=>$this->input->post('nik'),
           'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
           'tgl_lahir'=>$this->input->post('tgl_lahir'),
           'tpt_lahir'=>$this->input->post('tpt_lahir'),);
        $this->db->insert('tb_penduduk', $data);
        }

    function edit()
    {
        $id = $this->input->post('id_penduduk');
        $data = array('nama_penduduk' => $this->input->post('nama_penduduk'));
        $this->db->where('id_penduduk', $id);
        $this->db->update('tb_penduduk', $data);

        $id= $this->input->post('id_penduduk');
        $data=array('no_kk'=>$this->input->post('no_kk'));
        $this->db->where('id_penduduk',$id);
        $this->db->update('tb_penduduk', $data);

        $id= $this->input->post('id_penduduk');
        $data=array('nik'=>$this->input->post('nik'));
        $this->db->where('id_penduduk',$id);
        $this->db->update('tb_penduduk', $data);

        $id= $this->input->post('id_penduduk');
        $data=array('jenis_kelamin'=>$this->input->post('jenis_kelamin'));
        $this->db->where('id_penduduk',$id);
        $this->db->update('tb_penduduk', $data);

        $id= $this->input->post('id_penduduk');
        $data=array('tgl_lahir'=>$this->input->post('tgl_lahir'));
        $this->db->where('id_penduduk',$id);
        $this->db->update('tb_penduduk', $data);

        $id= $this->input->post('id_penduduk');
        $data=array('tpt_lahir'=>$this->input->post('tpt_lahir'));
        $this->db->where('id_penduduk',$id);
        $this->db->update('tb_penduduk', $data);

    }

    function get_one($id)
    {
        $indeks =  array('id_penduduk' => $id);
        return $this->db->get_where('tb_penduduk', $indeks);
    }

    function delete($id)
    {
        $this->db->where('id_penduduk', $id);
        $this->db->delete('tb_penduduk');
    }
    function tampilkan_data_paging($halaman, $batas)
    {
        return $this->db->query("select * from tb_penduduk limit $halaman,$batas");
    }

}
