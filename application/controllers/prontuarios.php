<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// remover nos dois 
// editar so dentro
// usar tabs para consultas e prontuarios
// fazer um overview na pagina home quando estiver logado
// sistema redirectiona para a pagina login quando nao estiver logado
/*
* tipos de usuario
* 1 admin
* 2 supervisor
* 3 estagiario
* 4 teclab
*/
// fazer codigo de nivel de accesso de usuariso as paginas
// fazer pagina de configuracao do usuario

// admin
// supervisor
// usar TABS! 
// 
// fazer aba de admin para alterar valores dos campos das opcoes, 
// fazer aba para alterar recessos e feriados, 
// fazer aba para gerenciamento de usuarios, 
// fazer aba para sistemas de mensagens e avisos

////////////////////////////////////////////////////////
// pós programcao
// validacao form
// css
// design e telas
////////////////////////////////////////////////////////


class Prontuarios extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model( 'paciente' );
		$this->load->model( 'prontuario' );
        $this->load->helper('form');
	}

    public function consultar( $id_prontuario = null, $teste = null )
    {       

        $prontuario = $this->prontuario->consultar( $id_prontuario );

        if( !empty($prontuario) ) {

            $data['prontuario'] = $prontuario;

            $this->load->view( 'prontuario-consultar', $data );

        } else {
            show_404();
        }

    }

    public function editar( $id_prontuario = null, $mensagem = null ) 
    {
        $prontuario = $this->prontuario->consultar( $id_prontuario );

        if( !empty($prontuario) ) {

            $data['mensagem'] = $mensagem;
            $data['prontuario'] = $prontuario;
            
            $this->load->view( 'prontuario-editar', $data );


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