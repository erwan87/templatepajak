<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH. 'libraries\tcpdf\tcpdf.php';

class Depan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Depan_model','Depan',TRUE);
    }

    public function index()
    {
        $namaFile   = 'Setoran Pajak.pdf';
        $path       = base_url('setoran/'.$namaFile);
        $data       = [
            'test'  => ''
        ];

        $this->load->view("templates.php", $data);
    }

    public function wew()
    {
        $namaFile   = 'Setoran Pajak.pdf';
        $path       = base_url('setoran/'.$namaFile);
        $data       = [
            'test'  => ''
        ];

        $this->load->view("wew.php", $data);
    }
}