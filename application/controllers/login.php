<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuario');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function valida()
	{
		$email =  $this->input->post('email');
		$senha = md5($this->input->post('senha'));
		if($this->usuario->verificaUsuarioPeloEmail($email))
		{
			if($this->usuario->verificaEmaileSenha($email, $senha))
			{
				$dados = $this->usuario->dadosUsuarios($email, $senha);
				$this->usuario->iniciaSessao($dados[0]);
				redirect(base_url('consultas'));
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