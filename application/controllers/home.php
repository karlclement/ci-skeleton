<?php 

if (! defined('BASEPATH')) exit ('No direct script access');

class Home extends CI_Controller {
	
	public function index() {
		$data = array (
			'page_title' => 'a',
			'page_keywords' => 'b',
			'page_author' => 'c',
			'page_description' => 'd'
		);
		$this->load->view('head', $data);
		$this->load->view('home-page', $data);
		$this->load->view('foot', $data);
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */