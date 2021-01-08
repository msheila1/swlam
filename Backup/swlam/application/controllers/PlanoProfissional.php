<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  PlanoProfissional extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','file');
    }

    public function index()
    {
        $this->load->view('home/header');
        $this->load->view('home/navbar');
        $this->load->view('plano_profissional/index');
        $this->load->view('home/about');
        $this->load->view('home/services');
        $this->load->view('home/works');
        $this->load->view('home/contact');
        $this->load->view('home/partners');
        $this->load->view('home/footer');
    }
}
