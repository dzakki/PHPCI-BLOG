<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_baru');
    }
    
    public function view($page = 'index'){

        if (!file_exists(APPPATH."pages/".$page.".php") ) {
            show_404();
        }

        $data['judul'] = $page;

        $this->load->view('pages/header.php', $data);
        $this->load->view('pages/'.$page);
        $this->load->view('pages/footer.php');

    }
}
