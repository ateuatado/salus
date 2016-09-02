<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Consulta');
        $this->load->library('table');
	}

    public function index(){

        $query['consultas'] = $this->consultar();
        $this->load->view('consultaTelaInicial', $query);
    }

    public function criar(){

        $this->load->view('consultaTelaCriar');
    }
    
    public function criar_page(){

        $criar_obj = new Consulta();
        $query['usuarios_ativos'] = $criar_obj->consultarAtivos();
        $this->load->view('consultaCadastro',$query);
    }

    public function consultar(){

        $consulta_obj = new Consulta();
        return $query = $consulta_obj->consultar();
    }


    
    public function cadastrarPage(){
        $criar_obj = new Consulta();
        $usuario = $this->input->post('usuario_selecionado');
        $data = $this->input->post('data_consulta');
        print_r($usuario);
        print_r($data);
        
}
}