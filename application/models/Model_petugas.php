<?php
class model_petugas extends CI_Model
{

        function getDataPetugas()
        {
                $query = "SELECT * FROM tb_petugas as tpet, tb_desa as td, tb_penduduk as tbp
                WHERE tpet.id_desa = td.id_desa AND tpet.id_penduduk = tbp.id_penduduk";
                return $this->db->query($query);
        }
        
        function tampilkan_data_paging($halaman,$batas)
        {
                $query = "SELECT * FROM tb_petugas as tpet, tb_desa as td, tb_penduduk as tbp
                WHERE tpet.id_desa = td.id_desa AND tpet.id_penduduk = tbp.id_penduduk limit $halaman,$batas";
                    return $this->db->query($query);
        }

        function getOnePetugas($id)
        {
                $query = "SELECT * FROM tb_petugas as tpet, tb_desa as td, tb_penduduk as tbp
                WHERE tpet.id_desa = td.id_desa AND tpet.id_penduduk = tbp.id_penduduk AND tpet.id_petugas='" . $id . "'";
                return $this->db->query($query);
        }
        /* keterangan
        tb_petugas =tpet
        tb_desa = td
        tb_penduduk = tbp
        tb_tercatat = tbt
        tb_pendidikan = tpen
        tb_kec = tk
        */
        function get_one($id)
        {
                $indeks =  array('id_petugas' => $id);
                return $this->db->get_where('tb_petugas', $indeks);
        }

        function delete($id)
        {
                $this->db->where('id_petugas', $id);
                $this->db->delete('tb_petugas');
        }
        function login($username,$password)
    {
        $chek=  $this->db->get_where('tb_petugas',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
}
