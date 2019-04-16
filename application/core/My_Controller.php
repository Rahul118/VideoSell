<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
}
class AdminController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('adminLoggedIn')) {
			redirect('auth');
		}
	}
}
class UserController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('userLoggedIn')) {
			redirect('auth');
		}
	}
}
