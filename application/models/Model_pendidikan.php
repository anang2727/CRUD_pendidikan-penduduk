<?php
class model_pendidikan extends CI_Model
{

    function tampilkan_data()
    {
        return $this->db->get('tb_pendidikan');
    }

    function tambah(){
        $data=array (
           'nama_pendidikan'=>$this->input->post('nama_pendidikan'),
           'tingkat_pendidikan'=>$this->input->post('tingkat_pendidikan'));
        $this->db->insert('tb_pendidikan', $data);
        }

        function edit()
        {
            $id = $this->input->post('id_pendidikan');
            $data = array('nama_pendidikan' => $this->input->post('nama_pendidikan'));
            $this->db->where('id_pendidikan', $id);
            $this->db->update('tb_pendidikan', $data);
    
            $id= $this->input->post('id_pendidikan');
            $data=array('tingkat_pendidikan'=>$this->input->post('tingkat_pendidikan'));
            $this->db->where('id_pendidikan',$id);
            $this->db->update('tb_pendidikan', $data);
    
        }
        function get_one($id)
        {
            $indeks =  array('id_pendidikan' => $id);
            return $this->db->get_where('tb_pendidikan', $indeks);
        }

    function delete($id)
    {
        $this->db->where('id_pendidikan', $id);
        $this->db->delete('tb_pendidikan');
    }
    function tampilkan_data_paging($halaman, $batas)
    {
        return $this->db->query("select * from tb_pendidikan limit $halaman,$batas");
    }

}
