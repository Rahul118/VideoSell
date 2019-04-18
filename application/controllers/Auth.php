<?php
defined('BASEPATH') or exit("direct access not allowed");
class Auth extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['UserAuthModel' => 'uam']);
	}

	public function index()
	{
		$this->session->userLoggedIn ? redirect('dashboard') : $this->load->view('public/auth');
	}

	//login post
	public function login()
	{
		if ($this->input->post('submit') !== 'login') {
			redirect('auth');
		}
		$result = $this->uam->login($this->input->post('email'), $this->input->post('pass'));
		$result ? redirect('dashboard') : redirect('auth');
	}

	//signup post
	public function signup()
	{
		if ($this->input->post('submit') !== 'signup') {
			redirect('auth');
		}
		$this->uam->signup($this->input->post('email'), $this->input->post('pass'));
		redirect('auth');
	}

	//reset post
	public function reset()
	{
		if ($this->input->post('submit') !== 'reset') {
			redirect('auth');
		}
		$result = $this->uam->reset($this->input->post('email'));
		if (!$result) {
			$this->session->set_flashdata('error', 'Unable to Send Reset Email Try again or contact support');
		} else {
			//send reset email
			$this->session->set_flashdata('success', 'Password Reset Email Sent, Do not forget to check spam folder');
		}
		redirect('auth');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
