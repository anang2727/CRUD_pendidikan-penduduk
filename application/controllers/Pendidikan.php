<?php
class pendidikan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_pendidikan');
        chek_session();

    }

    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/pendidikan/index/';
        $config['total_rows'] = $this->model_pendidikan->tampilkan_data()->num_rows();
        $config['per_page'] = 5; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_pendidikan->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template','pendidikan/lihat_data',$data);
    }

    function tambah()
    {
        if (isset($_POST['submit'])) {
            $this->model_pendidikan->tambah();
            redirect('pendidikan');

        if(isset($_POST['submit'])){
            $this->model_pendidikan->tambah();
            redirect('pendidikan');
            }    

        } else {
            // $this->load->view('pendidikan/form_input');
        $this->template->load('template','pendidikan/form_input');

        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->model_pendidikan->edit();
            redirect('pendidikan');
        } else {
            $id = $this->uri->segment(3);
            $data['record'] = $this->model_pendidikan->get_one($id)->row_array();
            // $this->load->view('pendidikan/form_edit', $data);
        $this->template->load('template','pendidikan/form_edit',$data);

        }
    }
    function delete()
    {
        $id = $this->uri->segment(3);
        $this->model_pendidikan->delete($id);
        redirect('pendidikan');
    }
}
