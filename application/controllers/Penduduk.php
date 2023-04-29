<?php
class penduduk extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('model_penduduk');
        chek_session();

 }
 
 function index(){
    $this->load->library('pagination');
    $config['base_url'] = base_url().'index.php/penduduk/index/';
    $config['total_rows'] = $this->model_penduduk->tampilkan_data()->num_rows();
    $config['per_page'] = 5; 
    $this->pagination->initialize($config); 
    $data['paging']     =$this->pagination->create_links();
    $halaman            =  $this->uri->segment(3);
    $halaman            =$halaman==''?0:$halaman;
    $data['record']     =    $this->model_penduduk->tampilkan_data_paging($halaman,$config['per_page']);
    $this->template->load('template','penduduk/lihat_data',$data);
}
 
    function tambah() {
         if(isset($_POST['submit'])){ 
             $data = array(
                      'nama_penduduk' => $this->input->post('nama_penduduk'),
                      'no_kk' => $this->input->post('no_kk'),
                      'nik' => $this->input->post('nik'),
                      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                      'tgl_lahir' => $this->input->post('tgl_lahir'),
                      'tpt_lahir' => $this->input->post('tpt_lahir'));
 
         $this->db->insert('tb_penduduk', $data);
         redirect('penduduk');
         } else {
             $this->load->model('model_penduduk');
             $data['rec_penduduk'] = $this->model_penduduk->tampilkan_data();
            //  $this->load->view('penduduk/form_input', $data);
        $this->template->load('template','penduduk/form_input', $data);

        }
 }
 
    function edit() 
    {
         if(isset($_POST['submit'])){ 
         $key = $this->input->post('id');
         $data = array( 
            'nama_penduduk' => $this->input->post('nama_penduduk'),
            'no_kk' => $this->input->post('no_kk'),
            'nik' => $this->input->post('nik'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tpt_lahir' => $this->input->post('tpt_lahir'));

                 $this->db->where('id_penduduk',$key);
                 $this->db->update('tb_penduduk', $data);
                 redirect('penduduk');
         } else {
             $id = $this->uri->segment(3);
             $data['rec_penduduk']=$this->model_penduduk->get_one($id)->row_array();
            //  $this->load->view('penduduk/form_edit',$data);
        $this->template->load('template','penduduk/form_edit', $data);

        }
 }
 
    function delete($id) {
        $id = $this->uri->segment(3);
        $this->db->where('id_penduduk',$id);
        $this->db->delete('tb_penduduk');
        redirect('penduduk');
        }
}
