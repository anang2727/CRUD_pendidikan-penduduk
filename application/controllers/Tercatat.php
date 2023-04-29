<?php
class tercatat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_tercatat');
        $this->load->model('model_petugas');
        $this->load->model('model_desa');
        $this->load->model('model_penduduk');
        $this->load->model('model_pendidikan');
        chek_session();

      
    }
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/tercatat/index/';
        $config['total_rows'] = $this->model_tercatat->getDataTercatat()->num_rows();
        $config['per_page'] = 5; 
        $config['num_link'] = 2; 
        $config['next_link'] = '>'; 
        $config['prev_link'] = '<'; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman       =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_tercatat->tampilkan_data_paging($halaman ,$config['per_page']);
        $this->template->load('template','tercatat/lihat_data',$data);
    }
    function tambah()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id_desa' => $this->input->post('id_desa'),
                'id_petugas' => $this->input->post('id_petugas'),
                'id_penduduk' => $this->input->post('id_penduduk'),
                'id_pendidikan' => $this->input->post('id_pendidikan'),
                'tgl_tercatat' => $this->input->post('tgl_tercatat'));

            $this->db->insert('tb_tercatat', $data);
            redirect('tercatat');
        } else {
            $this->load->model('model_desa');
            $this->load->model('model_petugas');
            $this->load->model('model_penduduk');
            $this->load->model('model_pendidikan');
            $data['rec_desa'] = $this->model_desa->tampilkan_data();
            $data['rec_petugas'] = $this->model_petugas->getDataPetugas();
            $data['rec_penduduk'] = $this->model_penduduk->tampilkan_data();
            $data['rec_pendidikan'] = $this->model_pendidikan->tampilkan_data();
            // $this->load->view('tercatat/form_input', $data);
        $this->template->load('template','tercatat/form_input', $data);

        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $key = $this->input->post('id');
            $data = array(
                'id_desa' => $this->input->post('id_desa'),
                'id_petugas' => $this->input->post('id_petugas'),
                'id_penduduk' => $this->input->post('id_penduduk'),
                'id_pendidikan' => $this->input->post('id_pendidikan'),
                'tgl_tercatat' => $this->input->post('tgl_tercatat'));
            $this->db->where('id_pencatatan', $key);
            $this->db->update('tb_tercatat', $data);
            redirect('tercatat');
        } else {
            $data['rec_desa'] = $this->model_desa->tampilkan_data();
            $data['rec_petugas'] = $this->model_petugas->getDataPetugas();
            $data['rec_penduduk'] = $this->model_penduduk->tampilkan_data();
            $data['rec_pendidikan'] = $this->model_pendidikan->tampilkan_data();
//
            $id = $this->uri->segment(3);
            $data['rec_tercatat'] = $this->model_tercatat->getOneTercatat($id)->row_array();
            // $this->load->view('tercatat/form_edit', $data);
            $this->template->load('template','tercatat/form_edit',$data);
        }
    }

    function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_pencatatan', $id);
        $this->db->delete('tb_tercatat');
        redirect('tercatat');
    }

    function pdf()
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Text(10, 10, 'LAPORAN PENCATATAN');
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 7, 'No', 1,0);
        $pdf->Cell(35, 7, 'Nama Desa', 1,0,'C');
        $pdf->Cell(35, 7, 'Nama Penduduk', 1,0,'C');
        $pdf->Cell(35, 7, 'Nama Petugas', 1,0,'C');
        $pdf->Cell(43, 7, 'Nama Pendidikan', 1,0,'C');
        $pdf->Cell(35, 7, 'Tgl Tercatat', 1,1,'C');
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
        $data=  $this->model_tercatat->laporan_default();
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 7, $no, 1,0);
            $pdf->Cell(35, 7, $r->nama_desa, 1,0);
            $pdf->Cell(35, 7, $r->nama_penduduk, 1,0);
            $pdf->Cell(35, 7, $r->nama_penduduk, 1,0);
            $pdf->Cell(43, 7, $r->nama_pendidikan, 1,0);
            $pdf->Cell(35, 7, $r->tgl_tercatat, 1,1);

            $no++;
        }
        // end
        $pdf->Output();
    }

    function excel()
    {
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=laporantercatat.xls");
        $data['record']=  $this->model_tercatat->laporan_default();
        $this->load->view('transaksi/laporan_excel',$data);
    }


}
