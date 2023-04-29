<?php
class model_tercatat extends CI_Model
{
        function getDataTercatat()
        {
                $query = "SELECT * FROM tb_tercatat as tbt, tb_desa as td, tb_penduduk as tbp, tb_petugas as tpet, tb_pendidikan as tpen
                WHERE tbt.id_desa = td.id_desa 
                AND tbt.id_penduduk = tbp.id_penduduk 
                AND tbt.id_petugas = tpet.id_petugas 
                AND tbt.id_pendidikan = tpen.id_pendidikan";
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

        function tampilkan_data_paging($halaman, $batas)
        {
                $query = "SELECT * FROM tb_tercatat as tbt, tb_desa as td, tb_penduduk as tbp, tb_petugas as tpet, tb_pendidikan as tpen
                WHERE tbt.id_desa = td.id_desa 
                AND tbt.id_penduduk = tbp.id_penduduk 
                AND tbt.id_petugas = tpet.id_petugas 
                AND tbt.id_pendidikan = tpen.id_pendidikan limit $halaman,$batas";
                return $this->db->query($query);
        }


        function getOneTercatat($id)
        {
                $query = "SELECT * FROM tb_tercatat as tbt, tb_desa as td, tb_penduduk as tbp, tb_petugas as tpet, tb_pendidikan as tpen
                WHERE tbt.id_desa = td.id_desa 
                AND tbt.id_penduduk = tbp.id_penduduk 
                AND tbt.id_petugas = tpet.id_petugas 
                AND tbt.id_pendidikan = tpen.id_pendidikan AND tbt.id_pencatatan='" . $id . "'";
                return $this->db->query($query);
        }

        function get_one($id)
        {
                $indeks =  array('id_pencatatan' => $id);
                return $this->db->get_where('tb_tercatat', $indeks);
        }


        function laporan_default()
        {
                $query = "SELECT * FROM tb_tercatat as tbt, tb_desa as td, tb_penduduk as tbp, tb_petugas as tpet, tb_pendidikan as tpen
                WHERE tbt.id_desa = td.id_desa 
                AND tbt.id_penduduk = tbp.id_penduduk 
                AND tbt.id_petugas = tpet.id_petugas 
                AND tbt.id_pendidikan = tpen.id_pendidikan";
                return $this->db->query($query);
        }

        function login($username, $password)
        {
                $chek =  $this->db->get_where('tercatat', array('username' => $username, 'password' =>  md5($password)));
                if ($chek->num_rows() > 0) {
                        return 1;
                } else {
                        return 0;
                }
        }
}
