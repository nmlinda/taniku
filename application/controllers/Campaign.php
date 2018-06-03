<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        
        //$this->load->library('session');

        // if($this->session->logged_in === FALSE){
        //     redirect('auth/login');
        // }
    }

	public function view($page)
	{
        $this->load->view('partials/_head');
        $this->load->view('partials/_header');
        if(!file_exists(APPPATH."views/pages/".$page.'.php')){
            $this->load->view('pages/404');
        }else{
            $this->load->view('pages/'.$page);
        }
        
        $this->load->view('partials/_footer');
    }

    public function detail(){
        $this->load->view('partials/_head');
        $this->load->view('partials/_header');
        $this->load->view('pages/campaign_detail');
        $this->load->view('partials/_footer');
    }
}
