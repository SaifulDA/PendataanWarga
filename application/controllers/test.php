<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function index()
    {
        $data['name'] = 'Neoline';
        $this->load->view('test', $data);
    }
}
