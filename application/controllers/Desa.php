<?php
class desa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_desa');
        $this->load->model('model_kec');
        chek_session();
    }

    function rekap()
    {
        if (isset($_POST['submit'])) {
            $t_rekap = $this->input->post('t_rekap');

            $data['record'] = $this->model_desa->ambilDataRekap($t_rekap);
            $this->load->view('desa/lihat_data', $data);
        }
    }

    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/desa/index/';
        $config['total_rows'] = $this->model_desa->tampilkan_data()->num_rows();
        $config['per_page'] = 5; 
        $config['num_link'] = 2; 
        $config['next_link'] = '>'; 
        $config['prev_link'] = '<'; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman       =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_desa->tampilkan_data_paging($halaman ,$config['per_page']);
        if($this->input->post('keyword')){
            $data['desa']=$this->model_desa->cari();
        }
        $this->template->load('template','desa/lihat_data',$data);
    }

    function page(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/desa/index/';
        $config['total_rows'] = $this->model_desa->tampilkan_data()->num_rows();
        $config['per_page'] = 10; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_desa->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template','desa/lihat_data',$data);
    }


    // function index()
    // {
    //     $data['record'] = $this->model_desa->tampilkan_data();
    //     // $this->load->view('desa/lihat_data',$data);
    //     $this->template->load('template', 'desa/lihat_data', $data);
    // }

    function tambah()
    {
        if (isset($_POST['submit'])) {
            $this->model_desa->tambah();
            redirect('desa');
        } else {
            $data['rec_kec'] = $this->model_kec->tampilkan_data();
            // $this->load->view('desa/form_input',$data);
            $this->template->load('template', 'desa/form_input', $data);
        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->model_desa->edit();
            redirect('desa');
        } else {
            $id = $this->uri->segment(3);
            $data['rec_kec'] = $this->model_kec->tampilkan_data();
            $data['record'] = $this->model_desa->get_one($id)->row_array();
            // $this->load->view('desa/form_edit',$data);
            $this->template->load('template', 'desa/form_edit', $data);
        }
    }

    function delete()
    {
        $id = $this->uri->segment(3);
        $this->model_desa->delete($id);
        redirect('desa');
    }


}
