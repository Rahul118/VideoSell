<?php
defined('BASEPATH') or exit('Direct Access Not Allowed');
class Dashboard extends UserController
{
	public function index()
	{
		$this->load->view('public/dashboard');
	}

	public function profile()
	{
		$this->load->view('public/profile');
	}

	public function settings()
	{
		$this->load->view('public/settings');
	}

	public function videos()
	{
		$this->load->view('public/videos');
	}
	public function upload()
	{
		$this->load->view('public/upload');
	}
	public function payments()
	{
		$this->load->view('public/payments');
	}
	public function mailbox()
	{
		$this->load->view('public/mailbox');
	}
}
