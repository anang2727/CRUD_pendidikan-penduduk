<?php
class petugas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_petugas');
        $this->load->model('model_desa');
        $this->load->model('model_penduduk');
        chek_session();
    }
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/petugas/index/';
        $config['total_rows'] = $this->model_petugas->getDataPetugas()->num_rows();
        $config['per_page'] = 5; 
        $config['num_link'] = 2; 
        $config['next_link'] = '>'; 
        $config['prev_link'] = '<'; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman       =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_petugas->tampilkan_data_paging($halaman ,$config['per_page']);
        $this->template->load('template','petugas/lihat_data',$data);
    }


    function tambah()
    {
        if (isset($_POST['submit'])) {
            $nama       =  $this->input->post('nama', true);
            $username   =  $this->input->post('username', true);
            $password   =  $this->input->post('password', true);
            $data       =  array(
                'username' => $username,
                'password' => md5($password),
                'id_desa' => $this->input->post('id_desa'),
                'id_penduduk' => $this->input->post('id_penduduk'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_berakhir' => $this->input->post('tgl_berakhir'),
                'sebagai' => $this->input->post('sebagai')
            );

            $this->db->insert('tb_petugas', $data);
            redirect('petugas');
        } else {
            $this->load->model('model_desa');
            $this->load->model('model_penduduk');
            $data['rec_desa'] = $this->model_desa->tampilkan_data();
            $data['rec_penduduk'] = $this->model_penduduk->tampilkan_data();
            // $this->load->view('petugas/form_input', $data);
            $this->template->load('template', 'petugas/form_input', $data);
        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $id         =  $this->input->post('id',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            if(empty($password)){
                 $data  =  array(   'username'=>$username);
            }
            else{
                  $data =  array(   
                                    'username'=>$username,
                                    'password'=>md5($password),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_berakhir' => $this->input->post('tgl_berakhir'),
                'sebagai' => $this->input->post('sebagai')
            );
            }
             $this->db->where('id_petugas',$id);
             $this->db->update('tb_petugas',$data);
             redirect('petugas');
        }else {
            $data['rec_desa'] = $this->model_desa->tampilkan_data();
            $data['rec_penduduk'] = $this->model_penduduk->tampilkan_data();
            $id = $this->uri->segment(3);
            // $data['rec_petugas'] = $this->model_petugas->get_one($id)->row_array();
            $data['rec_petugas'] = $this->model_petugas->getOnePetugas($id)->row_array();
            // $this->load->view('petugas/form_edit', $data);
            $this->template->load('template', 'petugas/form_edit', $data);
        }
    }



    function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_petugas', $id);
        $this->db->delete('tb_petugas');
        redirect('petugas');
    }
}
