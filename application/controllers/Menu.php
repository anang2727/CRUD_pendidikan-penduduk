<?php defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function index()
    {
        $this->load->view('view_dashboard');
    }
}
