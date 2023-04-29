<?php
class kec extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_kec');
        chek_session();

    }

    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/kec/index/';
        $config['total_rows'] = $this->model_kec->tampilkan_data()->num_rows();
        $config['per_page'] = 5; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_kec->tampilkan_data_paging($halaman,$config['per_page']);

        //Pencarian
        if($this->input->post('submit')){
            $data['kec']=$this->model_kec->cari();
        }
        $this->template->load('template','kec/lihat_data',$data);
    }

    function tambah()
    {
        if (isset($_POST['submit'])) {
            $this->model_kec->tambah();
            redirect('kec');
        } else {
            $this->template->load('template','kec/form_input');
        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->model_kec->edit();
            redirect('kec');
        } else {
            $id = $this->uri->segment(3);
            $data['record'] = $this->model_kec->get_one($id)->row_array();
            // $this->load->view('kec/form_edit', $data);
            $this->template->load('template','kec/form_edit',$data);

        }
    }


    function delete()
    {
        $id = $this->uri->segment(3);
        $this->model_kec->delete($id);
        redirect('kec');
    }
}
