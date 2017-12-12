<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
        {
            $this->load->view('templates/navbar_site');
        } else{
			$userx = $this->ion_auth->user()->row();
			$this->data['usersx'] = $userx->email;
			$this->load->view('templates/navbar_admin', $this->data);
		}
		$this->load->view('welcome_message');
		$this->load->view('templates/footer');
	}
}
