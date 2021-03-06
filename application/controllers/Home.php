<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('file');
        //$this->load->library('session');

        // if($this->session->logged_in === FALSE){
        //     redirect('auth/login');
        // }
    }

	public function index()
	{
        $this->load->view('partials/_head');
        $this->load->view('partials/_header');
        $this->load->view('pages/index');
        $this->load->view('partials/_footer');
    }
    
    public function view($page){
        if($page == 'coming_soon'){
            $this->load->view('pages/coming_soon');
        }else{
        $this->load->view('partials/_head');
        $this->load->view('partials/_header');
        if(!file_exists(APPPATH."views/pages/".$page.'.php')){
            $this->load->view('pages/404');
        }else{
            $this->load->view('pages/'.$page);
        }
        
        $this->load->view('partials/_footer');
        }
    }
}
