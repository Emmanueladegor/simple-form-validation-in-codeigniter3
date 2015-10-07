<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_validation extends CI_Controller {
	
        function __construct() {

            parent::__construct();
            $this->load->helper('form');
             $this->load->helper('url');

            $this->load->library('form_validation');
			$this->load->library('session');
        }

	public function index()
	{
		
              

                if ($this->input->post('submit')) {
            $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[cpassword]');
            $this->form_validation->set_rules('cpassword', 'Confrim password', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('radios', 'Gender', 'trim|required');
            if ($this->form_validation->run() == true) {
                $this->load->view('form_validation');
                $this->session->set_flashdata('success','Congrats Form Validated Successfully');
            } else {
                $this->load->view('form_validation');
            }
        } else {
            $this->load->view('form_validation');
        }
    }



	
}