<?php
class UserModel extends MY_Model
{
	function login($email, $password)
	{
		$query = $this->db
			->where('email', $email)
			->get('users');
		if (!$query->num_rows()) {
			return false;
		}
		$pass = $query->result()[0]->password;
		return password_verify($password, $pass);
	}
	public function signup($email, $password)
	{
		$passHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
		$data = array(
			'email' => $email,
			'password' => $passHash
		);
		$this->db->insert('users', $data);
		return $this->db->affected_rows();
	}
}
