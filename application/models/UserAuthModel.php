<?php
defined('BASEPATH') or exit('access denide');

class UserAuthModel extends CI_Model
{
	public function login($email, $password)
	{
		$query = $this->db->where('email', $email)->get('users');

		if (!$query->num_rows()) {
			$this->session->set_flashdata('error', 'Invalid Email Address.');
			return false;
		} else if (!password_verify($password, $query->result()[0]->password)) {
			$this->session->set_flashdata('error', 'Incorrect Password');
			return false;
		} else {
			$this->session->set_userdata('userLoggedIn', true);
			return true;
		}
	}
	public function signup($email, $password)
	{
		if ($this->db->where('email', $email)->get('users')->num_rows()) {
			$this->session->set_flashdata('error', 'Email Already Registered Try Another');
			return;
		}
		$passHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

		$this->db->insert('users', ['email' => $email, 'password' => $passHash]);

		$this->db->affected_rows() > 0 ? $this->session->set_flashdata('success', 'Registration Successfull Login Now') : $this->session->set_flashdata('error', 'Unable to Register Contact Support');
		return;
	}
	public function reset($email)
	{
		return $this->db->where('email', $email)->get('users')->num_rows();
	}
}
