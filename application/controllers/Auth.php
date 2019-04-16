<?php
defined('BASEPATH') or exit("direct access not allowed");
class Auth extends MY_Controller
{
	public function index()
	{
		$this->load->view('public/auth');
	}

	public function authenticate()
	{
		if ($this->input->post('submit') === 'login') {

			$result = $this->um->login($this->input->post('email'), $this->input->post('pass'));
			if ($result) {
				$this->session->set_userdata('userLoggedIn', true);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('error', 'Invalid Email or Password');
				redirect('auth');
			}
		} else if ($this->input->post('submit') === 'signup') {

			$result = $this->um->signup($this->input->post('email'), $this->input->post('pass'));
			if ($result > 0) {
				$this->session->set_flashdata('success', 'Registration Successfull Login Now');
			} else {
				$this->session->set_flashdata('error', 'Unable to Register Contact Support');
			}
			redirect('auth');
		} else if ($this->input->post('submit') === 'reset') {
			pr($this->input->post());
		} else {
			redirect('auth');
		}
	}
}
