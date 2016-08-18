<?php
class  Usuarios extends CI_Model
{
	public function dadosUsuarios($email,$senha)
	{
		if(!isset($email) or !isset($senha))
			return false;	
		$q = $this->db->query("SELECT id_usuario, nome, ra, tipo_usuario FROM usuarios WHERE email='".trim($email)."' AND senha='".trim($senha)."' LIMIT 1")->result_array();
		return $q;
	}

	public function verificaUsuarioPeloEmail($email)
	{
		if(!isset($email))
			return false;
		$q = $this->db->query("SELECT id_usuario FROM usuarios WHERE email='".trim($email)."' LIMIT 1")->row();
		if(!isset($q->id_usuario))
			return false;
		return true;
	}

	public function verificaEmaileSenha($email, $senha)
	{
		if(!isset($email) and !isset($senha))
			return false;
		$q = $this->db->query("SELECT id_usuario FROM usuarios WHERE email='".trim($email)."' AND senha='".trim($senha)."'")->row();
		if(!isset($q->id_usuario))
			return false;
		return true;
	}

	public function iniciaSessao($dados)
	{
		$this->session->set_userdata($dados);
	}

}