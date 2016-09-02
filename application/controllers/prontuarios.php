<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prontuarios extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model( 'paciente' );
		$this->load->model( 'prontuario' );
        $this->load->helper('form');
	}

    public function consultar($id_prontuario = null)
    {   
        $prontuario = $this->prontuario->consultar( $id_prontuario );

        if( !empty($prontuario) ) {

            $data['consultar'] = true;            
            $data['prontuario'] = $prontuario;
            $this->load->view( 'prontuario', $data );

        } else {
            show_404();
        }

    }

    public function editar( $id_prontuario = null, $mensagem = null ) 
    {
        $prontuario = $this->prontuario->consultar( $id_prontuario );

        if( !empty($prontuario) ) {

            $data['editar'] = true;
            $data['mensagem'] = $mensagem;
            $data['prontuario'] = $prontuario;
            $this->load->view( 'prontuario', $data );


        } else {
            show_404();
        }

    }

    public function editar_form() 
    {
       
        $resultado = $this->prontuario->editar();
        if($resultado == true) {
            redirect('prontuarios/editar/' . $this->input->post('id_prontuario') . '/sucesso' );
        } else {
            redirect('prontuarios/editar/' . $this->input->post('id_prontuario') . '/erro' );
        }

    }

}