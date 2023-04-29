<?php
class kec extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_halaman');
        chek_session();

    }
}
    ?>