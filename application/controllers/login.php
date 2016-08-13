<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function valida()
	{
		$email =  $this->input->post('email');
		$senha = md5($this->input->post('senha'));
		if($this->usuarios->verificaUsuarioPeloEmail($email))
		{
			if($this->usuarios->verificaEmaileSenha($email, $senha))
			{
				$dados = $this->usuarios->dadosUsuarios($email, $senha);
				$this->usuarios->iniciaSessao($dados[0]);
				redirect(base_url());
			}
			else
			{
				$d['msg'] = 'Senha inválida';
			}
		}
		else
		{
			$d['msg'] = 'Email não encontrado';
		}
		$this->load->view('login',$d);
	}

	public function sair()
	{
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}
}