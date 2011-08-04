<?php 

if (! defined('BASEPATH')) exit ('No direct script access');

class Home extends CI_Controller {
	
	public function index() {
		$data = array (
			'page_title' => '',
			'page_keywords' => '',
			'page_author' => '',
			'page_description' => ''
		);
		$this->load->view('head', $data);
		$this->load->view('home-page', $data);
		$this->load->view('foot', $data);
	}

}
/* End of file home.php */
/* Location: ./application/controllers/home.php */