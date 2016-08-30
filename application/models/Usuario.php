<?php
class Usuario extends CI_Model {

	private $id_usuario;
	private $nome_usuario;
	private $email;
	private $senha;
	private $tipo_usuario;
	private $ra;
	private $id_bateria;
	private $login_desativado;

	public function get_id_usuario() {
		return $this->id_usuario;
	}
	public function set_id_usuario($id_usuario) {
		$this->id_usuario = $id_usuario;
	}
	public function get_nome_usuario() {
		return $this->nome_usuario;
	}
	public function set_nome_usuario($nome_usuario) {
		$this->nome_usuario = $nome_usuario;
	}
	public function get_email() {
		return $this->email;
	}
	public function set_email($email) {
		$this->email = $email;
	}
	public function get_senha() {
		return $this->senha;
	}
	public function set_senha($senha) {
		$this->senha = $senha;
	}
	public function get_tipo_usuario() {
		return $this->tipo_usuario;
	}
	public function set_tipo_usuario($tipo_usuario) {
		$this->tipo_usuario = $tipo_usuario;
	}
	public function get_ra() {
		return $this->ra;
	}
	public function set_ra($ra) {
		$this->ra = $ra;
	}
	public function get_id_bateria() {
		return $this->id_bateria;
	}
	public function set_id_bateria($id_bateria) {
		$this->id_bateria = $id_bateria;
	}
	public function get_login_desativado() {
		return $this->login_desativado;
	}
	public function set_login_desativado($login_desativado) {
		$this->login_desativado = $login_desativado;
	}

	public function autenticar(){}

	public function cadastrarUsuario(){}

	public function criarSessao() {}

	public function lembrarSenha() {}

	public function trocarSenha() {}

	public function limparSessao() {}

	public function editarUsuario() {}

	public function consultarUsuario($id_usuario) {
		
		$resultado = $this->db->get_where('usuarios', array('id_usuario' => $id_usuario))->custom_result_object('Usuario');
		return ( !empty($resultado) ) ? $resultado[0] : $resultado;

	}

	public function dadosUsuarios($email,$senha)
	{
		if(!isset($email) or !isset($senha))
			return false;	
		$q = $this->db->query("SELECT id_usuario, nome_usuario, ra, tipo_usuario FROM usuarios WHERE email='".trim($email)."' AND senha='".trim($senha)."' LIMIT 1")->result_array();
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